<?php

namespace App\Patterns\Behavioral\State;

class Off implements RemoteControl
{
    public function pressSwitch(TV $context)
    {
        dump("I am already off. Going to be on now");
        $context->setState(new On());
    }
}
