<?php

namespace App\Patterns\Creational\Prototype;

class Rectangle extends Shape
{
    public function __construct()
    {
        $this->type = 'Rectangle';
    }

    public function draw(): void
    {
        $className = get_class($this);
        $methodName = __METHOD__;
        dump("Inside {$className}::{$methodName} method.");
    }
}
