<?php

namespace App\Patterns\Behavioral\Strategy;

class Item
{
    public function __construct(
        private string $code,
        private int $price
    ) {
    }

    /**
     * Get the value of code
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }
}
