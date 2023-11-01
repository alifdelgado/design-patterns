<?php

namespace App\Patterns\Creational\Builder;

class MotorCycle implements BuilderInterface
{
    public function __construct(private Product $product)
    {
    }

    public function buildBody(): MotorCycle
    {
        $this->product->add('MotorCycle body');
        return $this;
    }

    public function buildWheels(): MotorCycle
    {
        $this->product->add('2 MotorCycle wheels');
        return $this;
    }

    public function addHeadlights(): MotorCycle
    {
        $this->product->add('1 Headlights added');
        return $this;
    }

    public function getVehicle(): Product
    {
        return $this->product;
    }
}
