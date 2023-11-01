<?php

namespace App\Patterns\Creational\AbstractFactory;

class ShapeFactory extends AbstractFactory
{
    public function getShape(string $shape): Shape
    {
        return match ($shape) {
            'circle' => new Circle(),
            'square' => new Square(),
            'rectangle' => new Rectangle(),
        };
    }

    public function getColor(string $color)
    {
    }
}
