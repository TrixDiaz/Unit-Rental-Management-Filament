<?php

namespace App\Filament\Admin\Resources\ApplicationResource\Pages;

use App\Filament\Admin\Resources\ApplicationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;
use Filament\Notifications\Actions\Action;
use App\Models\User;
use App\Models\ApprovedApplication;
use App\Models\Tenant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon; // Add this import
use Illuminate\Support\Facades\Mail;
use App\Mail\ContractMail;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use App\Models\Concourse;
use Illuminate\Support\Facades\View;

class EditApplication extends EditRecord
{
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
   
    protected static string $resource = ApplicationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('approveApplication')
                ->label('Approve Application')
                ->icon('heroicon-o-check-circle')
                ->action(function () {
                    $application = $this->getRecord();
                    
                    DB::transaction(function () use ($application) {
                        // Store the application data in ApprovedApplication table
                        ApprovedApplication::create($application->toArray());

                        // Delete the application from the Application table
                        $application->delete();

                        // Notify the authenticated user
                        $authUser = Auth::user();
                        Notification::make()
                            ->success()
                            ->title('Application Approved')
                            ->body("You successfully approved the application and associated space.")
                            ->actions([
                                Action::make('view')
                                    ->button()
                                    ->url(route('filament.admin.resources.applications.index')),
                            ])
                            ->sendToDatabase($authUser);

                        // Notify the application's user
                        $applicationUser = User::find($application->user_id);
                        Notification::make()
                            ->success()
                            ->title('Application Approved')
                            ->body("Your application and associated space have been approved.")
                            ->sendToDatabase($applicationUser);

                        // Create a new Tenant instance
                        $tenant = Tenant::create([
                            'tenant_id' => $application->user_id,
                            'concourse_id' => $application->concourse_id,
                            'owner_id' => $application->user_id,
                            'lease_start' => $application->created_at,
                            'lease_due' => Carbon::parse($application->created_at)->addMonths(1),
                            'lease_end' => Carbon::parse($application->created_at)->addMonths($application->lease_term),
                            'lease_term' => $application->lease_term,
                            'lease_status' => 'active',
                            'bills' => $application->bills ? json_encode($application->bills) : null,
                            'monthly_payment' => $application->monthly_payment ? $application->monthly_payment : null,
                            'is_active' => true,
                        ]);

                        // Send contract email
                        $this->sendContractEmail($application, $tenant);
                    });

                    // Show a success message in the UI
                    Notification::make()
                        ->success()
                        ->title('Application and Space Approved')
                        ->body("The application and associated space have been successfully approved and notifications sent.")
                        ->send();

                    // Redirect to the list view after approval
                    return redirect()->route('filament.admin.resources.applications.index');
                })
                ->color('success')
                ->requiresConfirmation(),
            Actions\DeleteAction::make(),
            // Remove the manual 'sendContract' action
        ];
    }

    protected function sendContractEmail($application, $tenant)
    {
        $user = User::find($application->user_id);
        $concourse = Concourse::find($application->concourse_id);
        $leaseStart = $tenant->lease_start;
        $leaseEnd = $tenant->lease_end;

        // Fetch the price from ConcourseRate
        $price = 0;
        if ($concourse && $concourse->concourseRate) {
            $price = $concourse->concourseRate->price;
        }

        $contractData = [
            'user' => $user,
            'concourse' => $concourse,
            'application' => $application,
            'tenant' => $tenant,
            'leaseStart' => $leaseStart,
            'leaseEnd' => $leaseEnd,
            'monthlyPayment' => $price, 
            'leaseTerm' => $tenant->lease_term,
            'bills' => json_decode($tenant->bills, true) ?? [],
        ];

       // Mail::to($user->email)->send(new ContractMail($application, $contractData));

        Notification::make()
            ->success()
            ->title('Contract Sent')
            ->body("The contract has been sent to {$user->email}")
            ->send();
    }

    protected function getSavedNotification(): ?Notification
    {
        $record = $this->getRecord();

        // Check if the application status is 'approved'
        if ($record->status === 'approved') {
            return null; // Don't send any notification
        }

        $authUser = auth()->user();

        // Notification for the authenticated user
        $authNotification = Notification::make()
            ->success()
            ->icon('heroicon-o-document-text')
            ->title('Application Updated')
            ->body("Application {$record->name} has been updated.")
            ->actions([
                Action::make('markAsRead')
                    ->label('Mark as read')
                    ->button()
                    ->markAsRead(),
                Action::make('delete')
                    ->label('Delete')
                    ->color('danger')
                    ->icon('heroicon-o-trash')
                    ->action(fn(Notification $notification) => $notification->delete()),
            ])
            ->sendToDatabase($authUser);

        // Notification for the application owner (if different from auth user)
        $selectedUser = User::find($record->user_id);
        if ($selectedUser && $selectedUser->id !== $authUser->id) {
            $url = route('filament.app.pages.edit-requirement', [
                'concourse_id' => $record->concourse_id,
                'space_id' => $record->space_id,
                'user_id' => $record->user_id,
            ]);

            Notification::make()
                ->success()
                ->icon('heroicon-o-user-circle')
                ->title('Application Updated')
                ->body("Application {$record->name} Updated. Please review it!")
                ->actions([
                    Action::make('view')
                        ->label('View Application')
                        ->button()
                        ->url($url),
                    Action::make('delete')
                        ->label('Delete')
                        ->color('danger')
                        ->icon('heroicon-o-trash')
                        ->action(fn(Notification $notification) => $notification->delete()),
                ])
                ->sendToDatabase($selectedUser);
        }

        return $authNotification;
    }
}
