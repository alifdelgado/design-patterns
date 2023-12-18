<?php

namespace App\Patterns\Behavioral\Mediator;

class TestMediator
{
    public function init()
    {
        $mediator = new ChatMediatorImplementation();

        $firstUser = new UserImplementation($mediator, "John");
        $secondUser = new UserImplementation($mediator, "Jane");
        $thirdUser = new UserImplementation($mediator, "Jason");
        $fourthUser = new UserImplementation($mediator, "Jennifer");

        $mediator->addUser($firstUser);
        $mediator->addUser($secondUser);
        $mediator->addUser($thirdUser);
        $mediator->addUser($fourthUser);

        $firstUser->send("Hello, everyone!");
    }
}
