<?php

namespace App\Patterns\Behavioral\TemplateMethod;

abstract class HouseTemplate
{
    final public function buildHouse(): void
    {
        $this->buildFoundation();
        $this->buildPillars();
        $this->buildWalls();
        $this->buildWindows();
        dump("House is built.");
    }

    private function buildWindows()
    {
        dump("Building Glass Windows");
    }

    abstract public function buildWalls(): void;

    abstract public function buildPillars(): void;

    public function buildFoundation()
    {
        dump("Building foundation with cement, bricks and sand");
    }
}
