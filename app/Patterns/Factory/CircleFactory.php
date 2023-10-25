<?php

namespace App\Patterns\Factory;

class CircleFactory extends AbstractShapeFactory
{
    protected function factoryMethod(): Shape
    {
        return new Circle();
    }
}
