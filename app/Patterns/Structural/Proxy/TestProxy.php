<?php

namespace App\Patterns\Structural\Proxy;

class TestProxy
{
    public function init(): void
    {
        $image = new ProxyImage('logo.png');
        $image->display();
    }
}
