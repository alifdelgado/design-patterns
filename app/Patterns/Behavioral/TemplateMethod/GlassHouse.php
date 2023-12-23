<?php

namespace App\Patterns\Behavioral\TemplateMethod;

class GlassHouse extends HouseTemplate
{
    public function buildWalls(): void
    {
        dump("Building Glass walls");
    }

    public function buildPillars(): void
    {
        dump("Building Glass pillars");
    }
}
