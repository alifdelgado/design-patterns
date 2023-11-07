<?php

namespace App\Patterns\Structural\Adapter;

class TestAdapter
{
    public function init()
    {
        $duck = new MallardDuck();
        $turkey = new WildTurkey();
        $turkeyAdapter = new TurkeyAdapter($turkey);

        dump('The turkey says...');
        $turkey->gobble();
        $turkey->fly();

        dump('The duck says...');
        $duck->quack();
        $duck->fly();

        dump('The turkey adapter says...');
        $this->testDuck($turkeyAdapter);
    }

    private function testDuck(Duck $duck)
    {
        $duck->quack();
        $duck->fly();
    }
}
