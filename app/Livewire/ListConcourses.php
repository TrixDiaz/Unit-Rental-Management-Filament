<?php

namespace App\Livewire;

use App\Models\Concourse;
use Livewire\Component;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Columns\TextColumn;

class ListConcourses extends Component implements HasTable, HasForms
{
    use InteractsWithForms, InteractsWithTable;

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
                Tables\Actions\ViewAction::make(),
                Tables\Actions\Action::make('ret')
                    ->label('Rent')
                    ->icon('heroicon-o-rectangle-stack'),
            ])
        ;
    }
}
