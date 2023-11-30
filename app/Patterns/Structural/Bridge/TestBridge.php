<?php

namespace App\Patterns\Structural\Bridge;

class TestBridge
{
    public function init()
    {
        $car = new Car(new Produce(), new Assemble());
        $bike = new Bike(new Produce(), new Assemble());
        $car->manufacture();
        $bike->manufacture();
    }
}
