<?php

namespace App\Patterns\Behavioral\Iterator;

class NotificationBar
{
    public function __construct(private NotificationCollection $notificationCollection)
    {
    }

    public function printNotifications(): void
    {
        $iterator = $this->notificationCollection->createIterator();
        dump("---------NOTIFICATION BAR----------");
        while($iterator->hasNext()) {
            $notification = $iterator->next();
            dump($notification->getNotification());
        }
    }
}
