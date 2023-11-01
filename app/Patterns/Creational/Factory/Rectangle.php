<?php

namespace App\Patterns\Creational\Factory;

class Rectangle implements Shape
{
    public function draw(): void
    {
        dump(class_basename(__CLASS__) . ' draw');
    }
}
