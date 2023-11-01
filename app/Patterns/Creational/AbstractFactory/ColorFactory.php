<?php

namespace App\Patterns\Creational\AbstractFactory;

class ColorFactory extends AbstractFactory
{
    public function getColor(string $color): Color
    {
        return match ($color) {
            'red' => new Red(),
            'green' => new Green(),
            'blue' => new Blue(),
        };
    }

    public function getShape(string $color)
    {
        return null;
    }
}
