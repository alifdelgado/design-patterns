<?php

namespace App\Patterns\Creational;

use App\Patterns\Creational\AbstractFactory\Client as AbstractClient;
use App\Patterns\Creational\Builder\TestBuilder;
use App\Patterns\Creational\Factory\Client;
use App\Patterns\Creational\Prototype\TestPrototype;
use App\Patterns\Creational\Singleton\TestSingleton;

class TestCreational
{
    public function init()
    {
        (new Client())
            ->init()
            ->getShape();

        (new AbstractClient())->init();
        (new TestSingleton())->init();
        (new TestBuilder())->init();
        (new TestPrototype())->init();
    }
}
