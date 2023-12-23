<?php

namespace App\Patterns\Behavioral\Visitor;

class Book implements ItemElement
{
    public function __construct(
        private int $cost,
        private string $isbn
    ) {
    }

    public function accept(ShoppingCartVisitor $visitor): int
    {
        return $visitor->visitBook($this);
    }

    /**
     * Get the value of cost
     */
    public function getCost(): int
    {
        return $this->cost;
    }

    /**
     * Get the value of isbn
     */
    public function getIsbn(): string
    {
        return $this->isbn;
    }
}
