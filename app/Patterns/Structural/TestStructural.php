<?php

namespace App\Patterns\Structural;

use App\Patterns\Structural\Adapter\TestAdapter;
use App\Patterns\Structural\Bridge\TestBridge;
use App\Patterns\Structural\Composite\Company;

class TestStructural
{
    public function init(): void
    {
        (new TestAdapter())->init();
        (new TestBridge())->init();
        (new Company())->init();
        // (new TestDecorator())->init();
        // (new TestFacade())->init();
        // (new TestFlyweight())->init();
        // (new TestProxy())->init();
    }
}
