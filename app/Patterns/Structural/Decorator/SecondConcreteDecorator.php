<?php

namespace App\Patterns\Structural\Decorator;

class SecondConcreteDecorator extends AbstractDecorator
{
    public function doJob()
    {
        dump("***Start SecondConcreteDecorator***");
        parent::doJob();
        dump("I am a concrete decorator from SecondConcreteDecorator");
        dump("***End SecondConcreteDecorator***");
    }
}
