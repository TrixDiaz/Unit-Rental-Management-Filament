<?php

namespace App\Filament\Admin\Widgets;

use App\Models\Payment;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class PaymentPlatformChart extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static ?string $chartId = 'paymentPlatformChart';

      /**
     * Sort
     */
    protected static ?int $sort = 3;

    /**
     * Widget content height
     */
    protected static ?int $contentHeight = 275;

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'Payment Platform';

    /**
     * Chart options (series, labels, types, size, animations...)
     * https://apexcharts.com/docs/options
     *
     * @return array
     */
    protected function getOptions(): array
    {
        $maya  = Payment::where('payment_method', 'paymaya')->sum('amount');
        $gcash = Payment::where('payment_method', 'gcash')->sum('amount');
        $total = $maya + $gcash;
        $mayaPercentage = $total > 0 ? round(($maya / $total) * 100, 2) : 0;
        $gcashPercentage = $total > 0 ? round(($gcash / $total) * 100, 2) : 0;

        return [
            'chart' => [
                'type' => 'pie',
                'height' => 300,
            ],
            'series' => [$gcashPercentage, $mayaPercentage],
            'labels' => ['Gcash', 'PayMaya'],
            'colors' => ['#0000FF', '#FF0000'],
            'legend' => [
                'labels' => [
                    'fontFamily' => 'inherit',
                ],
            ],
        ];
    }
}
