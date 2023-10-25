<?php

namespace App\Patterns\AbstractFactory;

class Red implements Color
{
    public function fill(): void
    {
        dump(class_basename(__CLASS__) . ' fill');
    }
}
