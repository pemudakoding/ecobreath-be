<?php

namespace App\DataTransferObjects;

use App\Enums\AirQuality;

class BreakPointData
{
    public function __construct(
        public float $high,
        public float $low,
        public float $concentration,
        public AqiRange $aqiRange,
        public AirQuality $airQuality,
        public float $index = 0,
    )
    {

    }
}
