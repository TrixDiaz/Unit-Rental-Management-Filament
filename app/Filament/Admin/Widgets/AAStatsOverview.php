<?php

namespace App\Filament\Admin\Widgets;

use App\Models\Payment;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class AAStatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $totalRevenue = Payment::where('payment_status', 'paid')->sum('amount');
        $averagePayment = Payment::where('payment_status', 'paid')->avg('amount');
        $paymentCount = Payment::where('payment_status', 'paid')->count();

        return [
            Stat::make('Total Revenue', '₱ ' . number_format($totalRevenue, 2))
                ->description('Total completed payments')
                ->descriptionIcon('heroicon-m-banknotes')
                ->color('success'),
            Stat::make('Average Payment', '₱ ' . number_format($averagePayment, 2))
                ->description('Per completed payment')
                ->descriptionIcon('heroicon-m-calculator')
                ->color('info'),
            Stat::make('Payment Count', $paymentCount)
                ->description('Total number of payments')
                ->descriptionIcon('heroicon-m-document')
                ->color('warning'),
        ];
    }

    
}
