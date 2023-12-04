<?php

namespace App\Patterns\Structural\Decorator;

class FirstConcreteDecorator extends AbstractDecorator
{
    public function doJob()
    {
        parent::doJob();
        dump("I am a concrete decorator from FirstConcreteDecorator");
    }
}
