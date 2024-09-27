<?php

namespace App\Livewire;

use App\Models\Concourse;
use App\Models\User;
use App\Services\RequirementForm;
use Filament\Actions\Action;
use Filament\Forms\Components\TextInput;
use Livewire\Component;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Auth;

class ListConcourses extends Component implements HasTable, HasForms
{
    use InteractsWithForms, InteractsWithTable;

    public $concourseId;

    public function mount()
    {
        $this->concourseId = request()->query('concourse_id');
    }
    public function render()
    {
        return view('livewire.list-concourses');
    }

    public function table(Table $table): Table
    {
        return $table
            ->query(Concourse::query()->where('is_active', true))
            ->contentGrid([
                'md' => 3,
                'lg' => 4,
            ])
            ->columns([
                Tables\Columns\Layout\Stack::make([
                    Tables\Columns\ImageColumn::make('image')
                        ->width('100%')
                        ->height('200px')
                        ->defaultImageUrl(
                            fn($record) =>
                            $record->image === null
                                ? 'https://placehold.co/600x400'
                                : null
                        ),
                    Tables\Columns\TextColumn::make('name')
                        ->size(TextColumn\TextColumnSize::Large)
                        ->sortable()
                        ->searchable(),
                    Tables\Columns\TextColumn::make('status')
                        ->badge()
                        ->sortable()
                        ->extraAttributes(['class' => 'capitalize']),
                    Tables\Columns\TextColumn::make('address'),
                    Tables\Columns\TextColumn::make('created_at')
                        ->dateTime('F j, Y')
                        ->color('gray')
                        ->toggleable(isToggledHiddenByDefault: true),
                ]),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->options([
                        'Available' => 'Available',
                        'Occupied' => 'Occupied',
                    ]),
            ])
            ->actions([
                Tables\Actions\CreateAction::make()
                    ->disableCreateAnother()
                    ->label('Rent')
                    ->slideOver()
                    ->icon('heroicon-o-plus')
                    ->form(function ($record) {
                        return RequirementForm::schema($this->concourseId);
                    })
                    ->using(function (array $data, $record) {
                        // Create the application
                        $application = \App\Models\Application::create([
                            ...$data,
                            'user_id' => Auth::id(),
                            'concourse_id' => $this->concourseId,
                            'status' => 'pending',
                        ]);

                        // Store the uploaded requirements
                        if (isset($data['requirements'])) {
                            foreach ($data['requirements'] as $requirementId => $file) {
                                if ($file) {
                                    \App\Models\AppRequirement::create([
                                        'requirement_id' => $requirementId,
                                        'user_id' => Auth::id(),
                                        'space_id' => $record->id,
                                        'name' => \App\Models\Requirement::find($requirementId)->name,
                                        'status' => 'pending',
                                        'file' => $file,
                                    ]);
                                }
                            }
                        }

                        if ($record) {
                            $record->update([
                                'user_id' => Auth::id(),
                                'status' => 'pending'
                            ]);
                        }

                        Notification::make()
                            ->title('Application Submitted')
                            ->body('Your application has been submitted.')
                            ->icon('heroicon-o-document-text')
                            ->actions([
                                Action::make('markAsRead')
                                    ->label('Mark as read')
                                    ->button()
                                    ->markAsRead(),
                                Action::make('delete')
                                    ->label('Delete')
                                    ->color('danger')
                                    ->icon('heroicon-o-trash')
                                    ->action(fn(Notification $notification) => $notification->delete())
                            ])
                            ->sendToDatabase(Auth::user());

                        Notification::make()
                            ->title('New Application')
                            ->body('A new application has been submitted.')
                            ->icon('heroicon-o-document-text')
                            ->actions([
                                Action::make('markAsRead')
                                    ->label('mark as read')
                                    ->button()
                                    ->markAsRead(),
                                Action::make('delete')
                                    ->label('Delete')
                                    ->color('danger')
                                    ->icon('heroicon-o-trash')
                                    ->action(fn(Notification $notification) => $notification->delete())
                            ])
                            ->sendToDatabase(User::find(1));

                        return $application;
                    })
                    ->hidden(function ($record) {
                        if (!$record) return true; // Hide if no record (shouldn't happen, but just in case)

                        // Hide if space is not available
                        if ($record->status !== 'available') return true;

                        // Hide if user already has an application for this space
                        return \App\Models\Application::where('user_id', Auth::id())
                            ->where('concourse_id', $this->concourseId)
                            ->exists();
                    }),

            ])
        ;
    }
}
