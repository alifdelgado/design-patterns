<?php

namespace App\Patterns\Behavioral\State;

class TestState
{
    public function init()
    {
        dump("***State pattern demo***");
        $initialState = new Off();
        $tv = new TV($initialState);
        $tv->pressButton();
        $tv->pressButton();
    }
}
