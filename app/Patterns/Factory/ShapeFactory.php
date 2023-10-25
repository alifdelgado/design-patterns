<?php

namespace App\Patterns\Factory;

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
