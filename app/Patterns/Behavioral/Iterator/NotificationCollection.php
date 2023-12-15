<?php

namespace App\Patterns\Behavioral\Iterator;

class NotificationCollection implements CustomCollection
{
    public static int $maxItems = 6;
    public int $numberOfItems = 0;
    /**
     * Summary of notificationList
     * @var array<Notification>
     */
    private array $notificationList;

    public function __construct()
    {
        $this->notificationList = [];
    }

    public function createIterator(): Iterator
    {
        return new NotificationIterator($this->notificationList);
    }

    public function addItem(Notification $item): void
    {
        if ($this->numberOfItems > self::$maxItems) {
            return;
        }

        $this->notificationList[] = $item;
    }
}
