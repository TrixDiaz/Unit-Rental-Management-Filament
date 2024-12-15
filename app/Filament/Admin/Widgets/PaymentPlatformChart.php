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
    protected static ?string $heading = 'Yearly Revenue';

    /**
     * Chart options (series, labels, types, size, animations...)
     * https://apexcharts.com/docs/options
     *
     * @return array
     */
    protected function getOptions(): array
    {
        $payments = Payment::selectRaw('YEAR(created_at) as year, payment_method, SUM(amount) as total')
            ->groupBy('year', 'payment_method')
            ->orderBy('year')
            ->get();

        $years = $payments->pluck('year')->unique()->values();
        $maya = [];
        $gcash = [];

        foreach ($years as $year) {
            $mayaTotal = $payments->where('year', $year)
                ->where('payment_method', 'maya')
                ->first()?->total ?? 0;

            $gcashTotal = $payments->where('year', $year)
                ->where('payment_method', 'gcash')
                ->first()?->total ?? 0;

            $maya[] = $mayaTotal;
            $gcash[] = $gcashTotal;
        }

        return [
            'chart' => [
                'type' => 'bar',
                'height' => 300,
            ],
            'series' => [
                [
                    'name' => 'Gcash',
                    'data' => $gcash,
                ],
                [
                    'name' => 'PayMaya',
                    'data' => $maya,
                ],
            ],
            'xaxis' => [
                'categories' => $years->toArray(),
            ],
            'colors' => ['#0000FF', '#FF0000'],
            'legend' => [
                'labels' => [
                    'fontFamily' => 'inherit',
                ],
            ],
        ];
    }
}
