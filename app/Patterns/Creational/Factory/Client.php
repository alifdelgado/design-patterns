<?php

namespace App\Patterns\Creational\Factory;

class Client
{
    public function init(): void
    {
        (new RectangleFactory())
            ->getShape()
            ->draw();
        (new CircleFactory())
            ->getShape()
            ->draw();
        (new SquareFactory())
            ->getShape()
            ->draw();
    }

    public function getShape(): void
    {
        $shapeFactory = new ShapeFactory();
        $circle = $shapeFactory->getShape('circle');
        $circle->draw();
        $square = $shapeFactory->getShape('square');
        $square->draw();
        $rectangle = $shapeFactory->getShape('rectangle');
        $rectangle->draw();
    }
}
