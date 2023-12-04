<?php

namespace App\Patterns\Structural\Facade;

class Tuner
{
    private float $frequency;

    public function __construct(private string $description, private Amplifier $amplifier)
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

    public function setFrequency(float $frequency): void
    {
        dump($this->description . ' setting frequency to ' . $frequency);
        $this->frequency = $frequency;
    }

    public function setAm(): void
    {
        dump($this->description . ' setting AM mode');
    }

    public function setFm(): void
    {
        dump($this->description . ' setting FM mode');
    }

    public function __toString(): string
    {
        return $this->description;
    }
}
