<?php

namespace App\Patterns\Factory;

class SquareFactory extends AbstractShapeFactory
{
    protected function factoryMethod(): Shape
    {
        return new Square();
    }
}
