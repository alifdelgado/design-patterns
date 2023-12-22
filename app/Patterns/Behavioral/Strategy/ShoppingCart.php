<?php

namespace App\Patterns\Behavioral\Strategy;

use Illuminate\Support\Collection;

class ShoppingCart
{
    private Collection $items;

    public function __construct()
    {
        $this->items = new Collection();
    }

    public function addItem(Item $item): void
    {
        $this->items->push($item);
    }

    public function removeItem(Item $item): void
    {
        $this->items = $this->items->filter(fn ($i) => $i->getCode() !== $item->getCode());
    }

    public function calculateTotal(): int
    {
        return $this->items->reduce(fn ($total, $item) => $total + $item->getPrice(), 0);
    }

    public function pay(PaymentStrategy $paymentMethod): void
    {
        $amount = $this->calculateTotal();
        $paymentMethod->pay($amount);
    }
}
