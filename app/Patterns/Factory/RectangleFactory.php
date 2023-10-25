<?php

namespace App\Patterns\Factory;

class RectangleFactory extends AbstractShapeFactory
{
    protected function factoryMethod(): Shape
    {
        return new Rectangle();
    }
}
