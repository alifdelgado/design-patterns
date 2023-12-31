<?php

namespace App\Patterns\Behavioral;

use App\Patterns\Behavioral\ChainOfResponsibility\TestChainOfResponsibility;
use App\Patterns\Behavioral\Command\TestCommand;
use App\Patterns\Behavioral\Interpreter\TestInterpreter;
use App\Patterns\Behavioral\Iterator\TestIterator;
use App\Patterns\Behavioral\Mediator\TestMediator;
use App\Patterns\Behavioral\Memento\TestMemento;
use App\Patterns\Behavioral\Observer\TestObserver;
use App\Patterns\Behavioral\State\TestState;
use App\Patterns\Behavioral\Strategy\TestStrategy;
use App\Patterns\Behavioral\TemplateMethod\TestTemplateMethod;
use App\Patterns\Behavioral\Visitor\TestVisitor;

class TestBehavioral
{
    public function init()
    {
        (new TestChainOfResponsibility())->init();
        (new TestCommand())->init();
        (new TestInterpreter())->init();
        (new TestIterator())->init();
        (new TestMediator())->init();
        (new TestMemento())->init();
        (new TestObserver())->init();
        (new TestState())->init();
        (new TestStrategy())->init();
        (new TestTemplateMethod())->init();
        (new TestVisitor())->init();
    }
}
