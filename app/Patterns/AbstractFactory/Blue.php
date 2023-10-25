<?php

namespace App\Patterns\AbstractFactory;

class Blue implements Color
{
    public function fill(): void
    {
        dump(class_basename(__CLASS__) . ' fill');
    }
}
