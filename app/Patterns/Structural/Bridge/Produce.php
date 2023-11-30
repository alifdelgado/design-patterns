<?php

namespace App\Patterns\Structural\Bridge;

class Produce extends Workshop
{
    public function work(): void
    {
        dump('Produce');
    }
}
