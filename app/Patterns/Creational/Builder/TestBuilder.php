<?php

namespace App\Patterns\Creational\Builder;

use Illuminate\Support\Collection;

class TestBuilder
{
    private BuilderInterface $carBuilder;
    private BuilderInterface $motorcycleBuilder;
    private Product $carProduct;
    private Product $motorcycleProduct;

    public function init()
    {
        $this->carProduct = new Product(new Collection());
        $this->motorcycleProduct = new Product(new Collection());
        $this->carBuilder = new Car($this->carProduct);
        $this->motorcycleBuilder = new MotorCycle($this->motorcycleProduct);
        $firstProduct = (new Director($this->carBuilder))->createVehicle();
        $secondProduct = (new Director($this->motorcycleBuilder))->createVehicle();
        dump($firstProduct, $secondProduct);
    }
}
