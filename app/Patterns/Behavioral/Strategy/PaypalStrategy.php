<?php

namespace App\Patterns\Behavioral\Strategy;

class PaypalStrategy implements PaymentStrategy
{
    public function __construct(
        private string $email,
        private string $password
    ) {
    }

    public function pay(float $amount): void
    {
        dump("Pay $amount using PayPal");
    }
}
