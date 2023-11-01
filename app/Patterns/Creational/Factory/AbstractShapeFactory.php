<?php

namespace App\Patterns\Creational\Factory;

abstract class AbstractShapeFactory
{
    abstract protected function factoryMethod(): Shape;

    public function getShape(): Shape
    {
        return $this->factoryMethod();
    }
}
