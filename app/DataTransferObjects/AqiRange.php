<?php

namespace App\DataTransferObjects;

class AqiRange
{
    public function __construct(
        public float $high,
        public float $low,
    )
    {
    }
}
