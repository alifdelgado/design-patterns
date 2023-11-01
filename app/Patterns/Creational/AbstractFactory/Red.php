<?php

namespace App\Patterns\Creational\AbstractFactory;

class Red implements Color
{
    public function fill(): void
    {
        dump(class_basename(__CLASS__) . ' fill');
    }
}
