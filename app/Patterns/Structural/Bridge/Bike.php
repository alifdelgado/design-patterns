<?php

namespace App\Patterns\Structural\Bridge;

class Bike extends Vehicle
{
    public function __construct(Workshop $firstWorkshop, Workshop $secondWorkshop)
    {
        parent::__construct($firstWorkshop, $secondWorkshop);
    }

    public function manufacture(): void
    {
        dump("Bike");
        $this->firstWorkshop->work();
        $this->secondWorkshop->work();
    }
}
