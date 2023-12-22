<?php

namespace App\Patterns\Behavioral\State;

interface RemoteControl
{
    public function pressSwitch(Tv $context);
}
