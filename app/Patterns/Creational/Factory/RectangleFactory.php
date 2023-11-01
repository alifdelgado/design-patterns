<?php

namespace App\Patterns\Creational\Factory;

class RectangleFactory extends AbstractShapeFactory
{
    protected function factoryMethod(): Shape
    {
        return new Rectangle();
    }
}
