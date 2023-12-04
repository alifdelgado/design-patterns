<?php

namespace App\Patterns\Structural\Facade;

class TheaterLights
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

    public function dim(int $level): void
    {
        dump($this->description . ' dimming to ' . $level . '%');
    }

    public function __toString(): string
    {
        return $this->description;
    }
}
