<?php

namespace App\Patterns\Structural\Decorator;

class TestDecorator
{
    public function init(): void
    {
        dump("***Decorator Pattern***");
        $concreteComponent = new ConcreteComponent();
        $firstConcreteDecorator = new FirstConcreteDecorator();
        $secondConcreteDecorator = new SecondConcreteDecorator();
        $firstConcreteDecorator->setComponent($concreteComponent);
        $secondConcreteDecorator->setComponent($firstConcreteDecorator);
        $firstConcreteDecorator->doJob();
        $secondConcreteDecorator->doJob();
    }
}
