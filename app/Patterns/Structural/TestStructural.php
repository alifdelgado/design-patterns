<?php

namespace App\Patterns\Structural;

use App\Patterns\Structural\Adapter\TestAdapter;
use App\Patterns\Structural\Bridge\TestBridge;
use App\Patterns\Structural\Composite\Company;
use App\Patterns\Structural\Decorator\TestDecorator;
use App\Patterns\Structural\Facade\TestFacade;
use App\Patterns\Structural\Flyweight\TestFlyweight;
use App\Patterns\Structural\Proxy\TestProxy;

class TestStructural
{
    public function init(): void
    {
        (new TestAdapter())->init();
        (new TestBridge())->init();
        (new Company())->init();
        (new TestDecorator())->init();
        (new TestFacade())->init();
        (new TestFlyweight())->init();
        (new TestProxy())->init();
    }
}
