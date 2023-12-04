<?php

namespace App\Patterns\Structural\Facade;

class Amplifier
{
    private Tuner $tuner;
    private DvdPlayer $dvdPlayer;
    private CdPlayer $cdPlayer;

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

    public function setStereoSound(): void
    {
        dump($this->description . ' stereo mode on');
    }

    public function setSurroundSound(): void
    {
        dump($this->description . ' surround sound on (5 speakers, 1 subwoofer)');
    }

    public function setVolume(int $level): void
    {
        dump($this->description . ' setting volume to ' . $level);
    }

    public function setTuner(Tuner $tuner): void
    {
        dump($this->description . ' setting tuner to ' . $this->dvdPlayer);
        $this->tuner = $tuner;
    }

    public function setDvdPlayer(DvdPlayer $dvdPlayer): void
    {
        dump($this->description . ' setting DVD player to ' . $dvdPlayer);
        $this->dvdPlayer = $dvdPlayer;
    }

    public function setCdPlayer(CdPlayer $cdPlayer): void
    {
        dump($this->description . ' setting CD player to ' . $cdPlayer);
        $this->cdPlayer = $cdPlayer;
    }

    public function __toString(): string
    {
        return $this->description;
    }
}
