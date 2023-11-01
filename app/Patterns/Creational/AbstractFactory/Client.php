<?php

namespace App\Patterns\Creational\AbstractFactory;

class Client
{
    public function init()
    {
        dump("AbstractFactory");
        $factoryProducer = new FactoryProducer();

        $shapeFactory = $factoryProducer->getFactory("shape");
        $circle = $shapeFactory->getShape("circle");
        $circle->draw();
        $rectangle = $shapeFactory->getShape("rectangle");
        $rectangle->draw();
        $square = $shapeFactory->getShape("square");
        $square->draw();

        $colorFactory = $factoryProducer->getFactory("color");
        $red = $colorFactory->getColor("red");
        $red->fill();
        $green = $colorFactory->getColor("green");
        $green->fill();
        $blue = $colorFactory->getColor("blue");
        $blue->fill();
    }
}
