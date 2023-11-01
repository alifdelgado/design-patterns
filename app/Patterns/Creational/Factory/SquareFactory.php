<?php

namespace App\Patterns\Creational\Factory;

class SquareFactory extends AbstractShapeFactory
{
    protected function factoryMethod(): Shape
    {
        return new Square();
    }
}
