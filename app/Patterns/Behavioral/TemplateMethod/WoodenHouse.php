<?php

namespace App\Patterns\Behavioral\TemplateMethod;

class WoodenHouse extends HouseTemplate
{
    public function buildWalls(): void
    {
        dump("Building wooden walls");
    }

    public function buildPillars(): void
    {
        dump("Building wooden pillars");
    }
}
