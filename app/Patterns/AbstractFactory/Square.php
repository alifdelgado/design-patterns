<?php

namespace App\Patterns\AbstractFactory;

class Square implements Shape
{
    public function draw(): void
    {
        dump(class_basename(__CLASS__) . ' draw');
    }
}
