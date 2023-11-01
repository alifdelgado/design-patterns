<?php

namespace App\Patterns\Creational\Builder;

interface BuilderInterface
{
    public function buildBody();
    public function buildWheels();
    public function addHeadlights();
    public function getVehicle(): Product;
}
