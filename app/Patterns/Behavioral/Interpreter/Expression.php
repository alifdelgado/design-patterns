<?php

namespace App\Patterns\Behavioral\Interpreter;

interface Expression
{
    public function interpret(InterpreterContext $context): string;
}
