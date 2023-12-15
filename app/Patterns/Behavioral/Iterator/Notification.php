<?php

namespace App\Patterns\Behavioral\Iterator;

class Notification
{
    public function __construct(private string $notification)
    {
    }

    public function getNotification(): string
    {
        return $this->notification;
    }
}
