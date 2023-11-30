<?php

namespace App\Patterns\Structural\Bridge;

abstract class Vehicle
{
    public function __construct(
        protected Workshop $firstWorkshop,
        protected Workshop $secondWorkshop
    ) {
    }

    abstract public function manufacture(): void;
}
