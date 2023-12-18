<?php

namespace App\Patterns\Behavioral\Mediator;

abstract class User
{
    public function __construct(protected ChatMediator $chatMediator, protected string $name)
    {
    }

    public function send(string $message): void
    {
        dump("{$this->name}: sending message: {$message}");
        $this->chatMediator->sendMessage($message, $this);
    }

    public function receive(string $message): void
    {
        dump("{$this->name} received message: {$message}");
    }
}
