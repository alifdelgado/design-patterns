<?php

namespace App\Patterns\Behavioral\Observer;

interface Subject
{
    public function register(Observer $obj);
    public function unregister(Observer $obj);
    public function notifyObservers();
    public function getUpdate(Object $ibj);
}
