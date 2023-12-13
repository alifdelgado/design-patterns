<?php

namespace App\Patterns\Behavioral\Interpreter;

class InterpreterContext
{
    public function getBinaryFormat(int $i): string
    {
        return decbin($i);
    }

    public function getHexadecimalFormat(int $i): string
    {
        return dechex($i);
    }
}
