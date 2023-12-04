<?php

namespace App\Patterns\Structural\Facade;

class TestFacade
{
    public function init(): void
    {
        $amplifier = new Amplifier("Top-O-Line Amplifier");
        $tuner = new Tuner("Top-O-Line AM/FM Tuner", $amplifier);
        $dvdPlayer = new DvdPlayer("Top-O-Line DVD Player", $amplifier);
        $cdPlayer = new CdPlayer("Top-O-Line CD Player", $amplifier);
        $projector = new Projector("Top-O-Line Projector", $dvdPlayer);
        $theaterLights = new TheaterLights("Theater Ceiling Lights");
        $screen = new Screen("Theater Screen");
        $popcornPopper = new PopcornPopper("Popcorn Popper");

        $homeTheaterFacade = new HomeTheaterFacade(
            $amplifier,
            $tuner,
            $dvdPlayer,
            $cdPlayer,
            $projector,
            $screen,
            $theaterLights,
            $popcornPopper
        );

        $homeTheaterFacade->watchMovie("Batman: The Dark Knight Rises");
        $homeTheaterFacade->endMovie();
    }
}
