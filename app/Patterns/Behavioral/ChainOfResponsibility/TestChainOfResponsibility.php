<?php

namespace App\Patterns\Behavioral\ChainOfResponsibility;

class TestChainOfResponsibility
{
    public function __construct()
    {
    }

    public function init()
    {
        $dispenseChain = new FiftyDollarDispensor();
        $dispenseChain->setAmount(50);
        $twentyDispenseChain = new TwentyDollarDispensor();
        $twentyDispenseChain->setAmount(20);
        $tenDispenseChain = new TenDollarDispensor();
        $tenDispenseChain->setAmount(10);

        $dispenseChain->setNextChain($twentyDispenseChain)
                ->setNextChain($tenDispenseChain)
                ->setNextChain($dispenseChain)
                ->dispense(new Currency(530));
    }
}
