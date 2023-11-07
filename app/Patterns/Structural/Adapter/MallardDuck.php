<?php

namespace App\Patterns\Structural\Adapter;

class MallardDuck implements Duck
{
    public function quack()
    {
        dump('Quack');
    }

    public function fly()
    {
        dump('I can fly');
    }
}
