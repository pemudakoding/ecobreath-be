<?php

namespace App\Enums;

enum AirQuality
{
    case good;

    case moderate;

    case unhealthyForSensitiveGroups;

    case unhealthy;

    case veryUnhealthy;

    case hazardous;

    function color(): string
    {
        return match ($this) {
            self::good => 'success',
            self::moderate, self::unhealthyForSensitiveGroups => 'warning',
            default => 'danger'
        };
    }

    function description(): string
    {
        return match ($this) {
            self::good => 'Kualitas udara sangat baik',
            self::moderate => 'Kualitas udara kurang baik',
            self::unhealthyForSensitiveGroups => 'Kualitas udara tidak sehat bagi beberapa kalangan',
            default => 'Kualitas udara buruk'
        };
    }
}
