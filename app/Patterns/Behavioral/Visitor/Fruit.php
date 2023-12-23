<?php

namespace App\Patterns\Behavioral\Visitor;

class Fruit implements ItemElement
{
    public function __construct(
        private int $pricePerKg,
        private int $weight,
        private string $name
    ) {
    }

    public function accept(ShoppingCartVisitor $visitor): int
    {
        return $visitor->visitFruit($this);
    }

    /**
     * Get the value of pricePerKg
     */
    public function getPricePerKg(): int
    {
        return $this->pricePerKg;
    }

    /**
     * Get the value of weight
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }
}
