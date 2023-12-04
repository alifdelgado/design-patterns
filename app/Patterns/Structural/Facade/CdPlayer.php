<?php

namespace App\Patterns\Structural\Facade;

class CdPlayer
{
    private int $currentTrack;
    private string $title;

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

    public function eject(): void
    {
        $this->title = null;
        $this->currentTrack = 0;
        dump($this->description . ' eject');
    }

    public function play(string $title): void
    {
        $this->title = $title;
        $this->currentTrack = 0;
        dump($this->description . ' playing \'' . $title . '\'');
    }

    public function playTrack(int $track): void
    {
        if ($this->title === null) {
            dump($this->description . ' can\'t play track ' . $this->currentTrack . ' no cd inserted');
        }

        $this->currentTrack = $track;
        dump($this->description . ' playing track ' . $this->currentTrack . ' of \'' . $this->title . '\'');
    }

    public function stop(): void
    {
        $this->currentTrack = 0;
        dump($this->description . ' stopped');
    }

    public function pause(): void
    {
        dump($this->description . ' paused \'' . $this->title . '\'');
    }

    public function __toString(): string
    {
        return $this->description;
    }
}
