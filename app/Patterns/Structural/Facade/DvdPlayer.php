<?php

namespace App\Patterns\Structural\Facade;

class DvdPlayer
{
    private int $currentTrack;
    private string $movie;

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
        $this->movie = '';
        dump($this->description . ' eject');
    }

    public function play(string $movie): void
    {
        $this->movie = $movie;
        $this->currentTrack = 0;
        dump($this->description . ' playing "' . $movie . '"');
    }

    public function playTrack(int $track): void
    {
        if (!$this->movie) {
            dump($this->description . ' can\'t play track ' . $track . ' no dvd inserted');
        }

        $this->currentTrack = $track;
        dump($this->description . ' playing track ' . $this->currentTrack . ' of "' . $this->movie . '"');
    }

    public function stop(): void
    {
        $this->currentTrack = 0;
        dump($this->description . ' stopped "' . $this->movie . '"');
    }

    public function pause(): void
    {
        dump($this->description . ' paused "' . $this->movie . '"');
    }

    public function setTwoChannelAudio(): void
    {
        dump($this->description . ' set two channel audio');
    }

    public function setSurroundSound(): void
    {
        dump($this->description . ' set surround audio');
    }

    public function __toString(): string
    {
        return $this->description;
    }
}
