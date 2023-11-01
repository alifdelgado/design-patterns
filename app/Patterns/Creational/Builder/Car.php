<?php

namespace App\Patterns\Creational\Builder;

class Car implements BuilderInterface
{
    public function __construct(private Product $product)
    {
    }

    public function buildBody(): Car
    {
        $this->product->add('Car body');
        return $this;
    }

    public function buildWheels(): Car
    {
        $this->product->add('4 Car wheels');
        return $this;
    }

    public function addHeadlights(): Car
    {
        $this->product->add('2 Headlights added');
        return $this;
    }

    public function getVehicle(): Product
    {
        return $this->product;
    }
}
