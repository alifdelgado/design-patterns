<?php

namespace App\Patterns\Creational\AbstractFactory;

class Circle implements Shape
{
    public function draw(): void
    {
        dump(class_basename(__CLASS__) . ' draw');
    }
}
