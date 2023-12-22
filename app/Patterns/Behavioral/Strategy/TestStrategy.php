<?php

namespace App\Patterns\Behavioral\Strategy;

class TestStrategy
{
    public function init()
    {
        $cart = new ShoppingCart();
        $firstItem = new Item("1234", 10);
        $secondItem = new Item("5678", 40);

        $cart->addItem($firstItem);
        $cart->addItem($secondItem);

        $cart->pay(new PaypalStrategy("johndoe@email.com", "password"));

        $cart->pay(new CreditCardStrategy("John Doe", "1234567890123456", "123", "123"));
    }
}
