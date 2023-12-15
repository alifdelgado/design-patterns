<?php

namespace App\Patterns\Behavioral\Iterator;

class NotificationIterator implements Iterator
{
    public int $position = 0;
    public function __construct(private array $notificationList)
    {
    }

    public function hasNext(): bool
    {
        return isset($this->notificationList[$this->position]);
    }

    public function next(): Notification
    {
        return $this->notificationList[$this->position++];
    }
}
