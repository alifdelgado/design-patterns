<?php

namespace App\Patterns\Structural\Facade;

class Projector
{
    public function __construct(private string $description, private DvdPlayer $dvdPlayer)
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

    public function wideScreenMode(): void
    {
        dump($this->description . ' in widescreen mode (16x9 aspect ratio)');
    }

    public function tvMode(): void
    {
        dump($this->description . ' in tv mode (4x3 aspect ratio)');
    }

    public function __toString()
    {
        return $this->description;
    }
}
