<?php

namespace App\Patterns\Behavioral\Strategy;

interface PaymentStrategy
{
    public function pay(float $amount): void;
}
