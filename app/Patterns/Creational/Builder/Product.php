<?php

namespace App\Patterns\Creational\Builder;

use Illuminate\Support\Collection;

class Product
{
    public function __construct(private Collection $parts)
    {
    }

    public function add(string $part): void
    {
        $this->parts->push($part);
    }

    public function show(): void
    {
        dump('Product completed as below');
        $this->parts->each(fn ($part) => dump($part));
    }
}
