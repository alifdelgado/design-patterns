<?php

namespace App\Patterns\Structural\Facade;

class HomeTheaterFacade
{
    public function __construct(
        private Amplifier $amplifier,
        private Tuner $tuner,
        private DvdPlayer $dvdPlayer,
        private CdPlayer $cdPlayer,
        private Projector $projector,
        private Screen $screen,
        private TheaterLights $theaterLights,
        private PopcornPopper $popcornPopper
    ) {
    }

    public function watchMovie(string $movie): void
    {
        dump("Get ready to watch a movie...");
        $this->popcornPopper->on();
        $this->popcornPopper->pop();

        $this->theaterLights->dim(10);
        $this->screen->down();

        $this->projector->on();
        $this->projector->wideScreenMode();

        $this->amplifier->on();
        $this->amplifier->setDvdPlayer($this->dvdPlayer);
        $this->amplifier->setVolume(5);

        $this->dvdPlayer->on();
        $this->dvdPlayer->play($movie);
    }

    public function endMovie(): void
    {
        dump("Shutting movie theater down...");
        $this->popcornPopper->off();
        $this->theaterLights->on();
        $this->screen->up();
        $this->projector->off();
        $this->amplifier->off();
        $this->dvdPlayer->stop();
        $this->dvdPlayer->eject();
        $this->dvdPlayer->off();
    }
}
