<?php

namespace App\Patterns\Structural\Facade;

class Screen
{
    public function __construct(private string $description)
    {
    }

    public function up(): void
    {
        dump($this->description . ' screen up');
    }

    public function down(): void
    {
        dump($this->description . ' screen down');
    }

    public function __toString(): string
    {
        return $this->description;
    }
}
