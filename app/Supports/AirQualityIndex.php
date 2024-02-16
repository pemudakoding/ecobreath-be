<?php

namespace App\Supports;

use App\DataTransferObjects\AqiRange;
use App\DataTransferObjects\BreakPointData;
use App\Enums\AirQuality;
use App\Models\PolutanRecord;

class AirQualityIndex
{
    public static function resolveBreakpoint(float $averageOfConcentrationPoint)
    {
        return match (true) {
            $averageOfConcentrationPoint >= 0 && $averageOfConcentrationPoint <= 12 => new BreakPointData(high: 12, low: 0, concentration: $averageOfConcentrationPoint, aqiRange: new AqiRange(high: 50, low: 0), airQuality: AirQuality::good),
            $averageOfConcentrationPoint >= 12.1 && $averageOfConcentrationPoint <= 35.4 => new BreakPointData(high: 35.4, low: 12.1, concentration: $averageOfConcentrationPoint, aqiRange: new AqiRange(high: 100, low: 51), airQuality: AirQuality::moderate),
            $averageOfConcentrationPoint >= 35.5 && $averageOfConcentrationPoint <= 55.4 => new BreakPointData(high: 55.4, low: 35.5, concentration: $averageOfConcentrationPoint, aqiRange: new AqiRange(high: 150, low: 101), airQuality: AirQuality::unhealthyForSensitiveGroups),
            $averageOfConcentrationPoint >= 55.5 && $averageOfConcentrationPoint <= 150.4 => new BreakPointData(high: 150.4, low: 55.5, concentration: $averageOfConcentrationPoint, aqiRange: new AqiRange(high: 200, low: 151), airQuality: AirQuality::unhealthy),
            $averageOfConcentrationPoint >= 150.5 && $averageOfConcentrationPoint <= 250.4 => new BreakPointData(high: 250.4, low: 150.5, concentration: $averageOfConcentrationPoint, aqiRange: new AqiRange(high: 300, low: 201), airQuality: AirQuality::veryUnhealthy),
            $averageOfConcentrationPoint >= 250.5 && $averageOfConcentrationPoint <= 350.4 => new BreakPointData(high: 350.4, low: 250.5, concentration: $averageOfConcentrationPoint, aqiRange: new AqiRange(high: 400, low: 301), airQuality: AirQuality::hazardous),
            $averageOfConcentrationPoint >= 350.5 && $averageOfConcentrationPoint <= 500.4 => new BreakPointData(high: 500.4, low: 350.5, concentration: $averageOfConcentrationPoint, aqiRange: new AqiRange(high: 500, low: 401), airQuality: AirQuality::hazardous),
        };
    }

    public static function calculateIndex(BreakPointData $data): BreakPointData
    {
        $data->index = round(num: (($data->aqiRange->high - $data->aqiRange->low) / ($data->high - $data->low)) * ($data->concentration - $data->low) + $data->aqiRange->low);

        return $data;
    }

    public static function averageOfToday(): float
    {
        return PolutanRecord::latest()->limit(value: 24)->average('pm_two');
    }

    public static function totalStationDataCameFrom(): int
    {
        return PolutanRecord::latest()->limit(value: 24)->groupBy('village_id')->get()->count();
    }
}
