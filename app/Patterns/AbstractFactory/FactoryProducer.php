<?php

namespace App\Patterns\AbstractFactory;

class FactoryProducer
{
    public function getFactory(string $factory): AbstractFactory
    {
        return match($factory) {
            'shape' => new ShapeFactory(),
            'color' => new ColorFactory(),
        };
    }
}
