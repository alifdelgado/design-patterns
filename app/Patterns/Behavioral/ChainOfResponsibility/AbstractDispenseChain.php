<?php

namespace App\Patterns\Behavioral\ChainOfResponsibility;

abstract class AbstractDispenseChain implements DispenseChain
{
    protected int $amount;
    private $nextChain;

    public function __construct()
    {
    }

    public function dispense(Currency $currency)
    {
        if(!isset($this->nextChain)) {
            return;
        }

        if ($currency->getAmount() >= $this->amount) {
            $num = intval($currency->getAmount() / $this->amount);
            $remainder = intval($currency->getAmount() % $this->amount);
            dump("Dispensing $num $this->amount$ note");

            if ($remainder != 0) {
                return $this->nextChain->dispense(new Currency($remainder));
            }
        }

        return null;
    }

    /**
     * Set the value of nextChain
     *
     * @return  self
     */
    public function setNextChain($nextChain)
    {
        $this->nextChain = $nextChain;
        return $this->nextChain;
    }

    public function setAmount(int $amount)
    {
        $this->amount = $amount;
    }
}
