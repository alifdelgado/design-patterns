<?php
namespace App\Patterns\Behavioral\Interpreter;

class IntToHexExpression implements Expression
{
    public function __construct(private int $i)
    {
    }

    public function interpret(InterpreterContext $context): string
    {
        return $context->getHexadecimalFormat($this->i);
    }
}
