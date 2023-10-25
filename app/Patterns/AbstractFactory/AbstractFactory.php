<?php

namespace App\Patterns\AbstractFactory;

abstract class AbstractFactory
{
    abstract public function getColor(String $color);
    abstract public function getShape(String $color);
}
