<?php

namespace App\Patterns\Structural\Decorator;

class ConcreteComponent extends Component
{
    public function doJob()
    {
        dump("I'm from a Concrete Component - I am closed to modification");
    }
}
