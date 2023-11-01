<?php

namespace App\Patterns\Creational\Factory;

class CircleFactory extends AbstractShapeFactory
{
    protected function factoryMethod(): Shape
    {
        return new Circle();
    }
}
