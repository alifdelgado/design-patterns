<?php

namespace App\Patterns\Structural\Adapter;

class WildTurkey implements Turkey
{
    public function gobble()
    {
        dump('Gobble gobble');
    }

    public function fly()
    {
        dump('I am flying');
    }
}
