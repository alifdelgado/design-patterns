<?php

namespace App\Patterns\Creational\Builder;

class Director
{
    public function __construct(private BuilderInterface $builder)
    {
    }

    public function createVehicle(): Product
    {
        return $this->builder
                    ->buildBody()
                    ->buildWheels()
                    ->addHeadlights()
                    ->getVehicle();
    }
}
