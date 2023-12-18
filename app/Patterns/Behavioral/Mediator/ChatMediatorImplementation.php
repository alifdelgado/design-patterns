<?php

namespace App\Patterns\Behavioral\Mediator;

use Illuminate\Support\Collection;

class ChatMediatorImplementation implements ChatMediator
{
    private Collection $users;
    public function __construct()
    {
        $this->users = new Collection();
    }

    public function sendMessage(String $message, User $user)
    {
        $this->users->each(function ($item) use ($message, $user) {
            if($item!==$user) {
                $item->receive($message);
            }
        });
    }

    public function addUser(User $user)
    {
        $this->users->add($user);
    }
}
