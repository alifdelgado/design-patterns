<?php

namespace App\Patterns\Creational\Factory;

class ShapeFactory
{
    public function getShape(string $shape): Shape
    {
        return match ($shape) {
            'circle' => new Circle(),
            'square' => new Square(),
            'rectangle' => new Rectangle()
        };
    }
}
