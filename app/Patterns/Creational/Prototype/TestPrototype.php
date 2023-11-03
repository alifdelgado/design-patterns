<?php

namespace App\Patterns\Creational\Prototype;

class TestPrototype
{
    public function init()
    {
        $shapeCache = new ShapeCache();
        $shapeCache->loadCache();
        $firstShape = $shapeCache->getShape('1');
        $secondShape = $shapeCache->getShape('2');
        dump('Test prototype');
        dump($firstShape, $secondShape);
    }
}
