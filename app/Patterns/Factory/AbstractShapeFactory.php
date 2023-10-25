<?php

namespace App\Patterns\Factory;

abstract class AbstractShapeFactory
{
    abstract protected function factoryMethod(): Shape;

    public function getShape(): Shape
    {
        return $this->factoryMethod();
    }
}
