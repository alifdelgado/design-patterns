<?php

namespace App\Patterns\Structural\Facade;

class PopcornPopper
{
    public function __construct(private string $description)
    {
    }

    public function on(): void
    {
        dump($this->description . ' on');
    }

    public function off(): void
    {
        dump($this->description . ' off');
    }

    public function pop(): void
    {
        dump($this->description . ' popping popcorn!');
    }

    public function __toString(): string
    {
        return $this->description;
    }
}
