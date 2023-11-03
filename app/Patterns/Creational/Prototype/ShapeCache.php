<?php

namespace App\Patterns\Creational\Prototype;

use Illuminate\Support\Collection;

class ShapeCache
{
    private Collection $shapeMap;

    public function __construct()
    {
        $this->shapeMap = collect();
    }

    public function getShape(string $shapeId)
    {
        return $this->shapeMap->first(fn ($item) => $item->getId() === $shapeId);
    }

    public function loadCache(): void
    {
        $rectangle = new Rectangle();
        $rectangle->setId('1');
        $this->shapeMap->put($rectangle->getId(), $rectangle);

        $square = new Square();
        $square->setId('2');
        $this->shapeMap->put($square->getId(), $square);
    }
}
