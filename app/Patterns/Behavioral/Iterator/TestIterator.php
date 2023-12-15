<?php

namespace App\Patterns\Behavioral\Iterator;

class TestIterator
{
    public function init()
    {
        $notificationCollection = new NotificationCollection();
        $notificationCollection->addItem(new Notification('Notification 1'));
        $notificationCollection->addItem(new Notification('Notification 2'));
        $notificationCollection->addItem(new Notification('Notification 3'));
        $notificationCollection->addItem(new Notification('Notification 4'));
        $notificationBar = new NotificationBar($notificationCollection);
        $notificationBar->printNotifications();
    }
}
