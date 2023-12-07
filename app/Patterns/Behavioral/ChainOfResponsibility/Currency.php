<?php

namespace App\Patterns\Behavioral\ChainOfResponsibility;

class Currency
{
    public function __construct(private int $amount)
    {
    }

    /**
     * Get the value of amount
     */
    public function getAmount()
    {
        return $this->amount;
    }
}
