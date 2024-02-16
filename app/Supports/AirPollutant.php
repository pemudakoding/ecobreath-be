<?php

namespace App\Supports;

use Azuyalabs\WAQI\WAQI;

class AirPollutant
{
    public static function make()
    {
        return new WAQI(token: '6e90627e52a0f38664cf868655019e38aafdcbbd');
    }
}
