<?php

namespace App\Patterns\Behavioral;

use App\Patterns\Behavioral\ChainOfResponsibility\TestChainOfResponsibility;
use App\Patterns\Behavioral\Command\TestCommand;
use App\Patterns\Behavioral\Interpreter\TestInterpreter;

class TestBehavioral
{
    public function init()
    {
        (new TestChainOfResponsibility())->init();
        (new TestCommand())->init();
        (new TestInterpreter())->init();
        // (new TestIterator())->init();
        // (new TestMediator())->init();
        // (new TestMemento())->init();
        // (new TestObserver())->init();
        // (new TestState())->init();
        // (new TestStrategy())->init();
        // (new TestTemplateMethod())->init();
        // (new TestVisitor())->init();
    }
}
