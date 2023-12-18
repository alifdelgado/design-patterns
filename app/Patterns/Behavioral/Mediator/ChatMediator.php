<?php

namespace App\Patterns\Behavioral\Mediator;

interface ChatMediator
{
    public function sendMessage(String $message, User $user);
    public function addUser(User $user);
}
