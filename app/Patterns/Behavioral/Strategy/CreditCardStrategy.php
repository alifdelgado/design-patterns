<?php

namespace App\Patterns\Behavioral\Strategy;

class CreditCardStrategy implements PaymentStrategy
{
    public function __construct(
        private string $name,
        private string $cardNumber,
        private string $securityCode,
        private string $expirationDate
    ) {
    }

    public function pay(float $amount): void
    {
        dump("Pay {$amount} using CreditCard");
    }
}
