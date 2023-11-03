<?php

namespace App\Patterns\Creational\Prototype;

class Square extends Shape
{
    public function __construct()
    {
        $this->type = 'Square';
    }

    public function draw(): void
    {
        $className = get_class($this);
        $methodName = __METHOD__;
        dump("Inside {$className}::{$methodName} method.");
    }
}
