<?php

namespace App\Patterns\Behavioral\Observer;

use Illuminate\Support\Collection;

class MyTopic implements Subject
{
    private string $message;
    private bool $changed;
    private Collection $observers;

    public function __construct()
    {
        $this->message = "";
        $this->changed = false;
        $this->observers = new Collection();
    }

    public function register(Observer $obj): void
    {
        if(!$obj) {
            throw new \Exception("Observer not found");
        }

        if(!$this->observers->contains($obj)) {
            $this->observers->push($obj);
        }
    }

    public function unregister(Observer $obj): void
    {
        $this->observers = $this->observers->filter(fn ($item) => $item !== $obj);
    }

    public function notifyObservers(): void
    {
        if(!$this->changed) {
            return;
        }

        $observersLocal = $this->observers;
        $this->changed = false;

        $observersLocal->each(fn ($obj) => $obj->update());
    }

    public function getUpdate(Object $obj): string
    {
        return $this->message;
    }

    public function postMessage(String $msg): void
    {
        $this->message = $msg;
        $this->changed = true;
        dump("Message Posted to Topic: " . $this->message);
        $this->notifyObservers();
    }
}
