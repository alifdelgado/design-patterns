<?php

namespace App\Patterns\Behavioral\Interpreter;

class IntToBinaryExpression implements Expression
{
    public function __construct(private int $i)
    {
    }

    public function interpret(InterpreterContext $context): string
    {
        return $context->getBinaryFormat($this->i);
    }
}
