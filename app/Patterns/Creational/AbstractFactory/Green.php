<?php

namespace App\Patterns\Creational\AbstractFactory;

class Green implements Color
{
    public function fill(): void
    {
        dump(class_basename(__CLASS__) . ' fill');
    }
}
