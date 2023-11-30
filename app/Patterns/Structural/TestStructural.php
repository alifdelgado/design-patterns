<?php

namespace App\Patterns\Structural;

use App\Patterns\Structural\Adapter\TestAdapter;
use App\Patterns\Structural\Bridge\TestBridge;

class TestStructural
{
    public function init(): void
    {
        (new TestAdapter())->init();
        (new TestBridge())->init();
        // (new TestComposite())->init();
        // (new TestDecorator())->init();
        // (new TestFacade())->init();
        // (new TestFlyweight())->init();
        // (new TestProxy())->init();
    }
}
