<?php

namespace App\Patterns\Structural\Flyweight;

interface RobotInterface
{
    public function print();

    public function setColor(string $color);
}
