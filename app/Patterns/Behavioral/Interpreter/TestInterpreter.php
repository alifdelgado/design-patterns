<?php

namespace App\Patterns\Behavioral\Interpreter;

class TestInterpreter
{
    public function init(): void
    {
        $firstString = "28 in Binary";
        $secondString = "28 in Hexadecimal";

        dump("{$firstString} = {$this->interpret($firstString)}");
        dump("{$secondString} = {$this->interpret($secondString)}");
    }

    public function interpret(String $string): string
    {
        $context = new InterpreterContext();
        $result = $string;
        if(str_contains(strtolower($string), "hex")) {
            $result = new IntToHexExpression(intval($string));
        } elseif(str_contains(strtolower($string), "binary")) {
            $result = new IntToBinaryExpression(intval($string));
        }
        return $result->interpret($context);
    }
}
