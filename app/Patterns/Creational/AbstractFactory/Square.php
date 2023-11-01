<?php

namespace App\Patterns\Creational\AbstractFactory;

class Square implements Shape
{
    public function draw(): void
    {
        dump(class_basename(__CLASS__) . ' draw');
    }
}
