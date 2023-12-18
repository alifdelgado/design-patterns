<?php

namespace App\Patterns\Behavioral\Mediator;

class UserImplementation extends User
{
    public function __construct(ChatMediator $chatMediator, string $name)
    {
        parent::__construct($chatMediator, $name);
    }
}
