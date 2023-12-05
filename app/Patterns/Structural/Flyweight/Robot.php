<?php

namespace App\Patterns\Structural\Flyweight;

class Robot implements RobotInterface
{
    private string $color;

    public function __construct(private string $robotType)
    {
    }
    public function print()
    {
        dump("This is a {$this->robotType} type robot with {$this->color} color");
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }
}
