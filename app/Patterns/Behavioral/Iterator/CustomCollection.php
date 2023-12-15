<?php

namespace App\Patterns\Behavioral\Iterator;

interface CustomCollection
{
    public function createIterator(): Iterator;
}
