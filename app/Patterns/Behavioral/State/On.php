<?php

namespace App\Patterns\Behavioral\State;

class On implements RemoteControl
{
    public function pressSwitch(TV $context)
    {
        dump("I am already on. Going to be off now");
        $context->setState(new Off());
    }
}
