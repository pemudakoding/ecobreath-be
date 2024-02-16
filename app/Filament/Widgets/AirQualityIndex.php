<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Str;

class AirQualityIndex extends BaseWidget
{
    protected static ?int $sort = 2;

    protected function getColumns(): int
    {
        return 2;
    }

    protected function getStats(): array
    {
        $breakpoint = \App\Supports\AirQualityIndex::calculateIndex(
            data: \App\Supports\AirQualityIndex::resolveBreakpoint(
                averageOfConcentrationPoint: \App\Supports\AirQualityIndex::averageOfToday()
            )
        );

        return [
            Stat::make(
                label: 'Indeks Kualitas Udara',
                value: new HtmlString($breakpoint->index)
            )
                ->description(description: $breakpoint->airQuality->description() . ' di Kota Palu dari ' . \App\Supports\AirQualityIndex::totalStationDataCameFrom() . ' wilayah')
                ->descriptionColor(color: $breakpoint->airQuality->color()),
            Stat::make(label: 'Rata-Rata PM2 di kota Palu', value: new HtmlString(html: round($breakpoint->concentration) . ' m/m3'))
        ];
    }
}
