<?php

namespace App\Patterns\Behavioral\ChainOfResponsibility;

interface DispenseChain
{
    public function setNextChain(DispenseChain $nextChain);
    public function dispense(Currency $currency);
}
