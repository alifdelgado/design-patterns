<?php

namespace App\Patterns\Structural\Bridge;

class Car extends Vehicle
{
    public function __construct(Workshop $firstWorkshop, Workshop $secondWorkshop)
    {
        parent::__construct($firstWorkshop, $secondWorkshop);
    }

    public function manufacture(): void
    {
        dump("Car");
        $this->firstWorkshop->work();
        $this->secondWorkshop->work();
    }
}
