<?php

namespace App\Patterns\Behavioral\TemplateMethod;

class TestTemplateMethod
{
    public function init()
    {
        $woodenHouse = new WoodenHouse();
        $woodenHouse->buildHouse();

        dump("***************************");

        $glassHouse = new GlassHouse();
        $glassHouse->buildHouse();
    }
}
