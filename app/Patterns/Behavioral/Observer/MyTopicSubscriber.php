<?php

namespace App\Patterns\Behavioral\Observer;

class MyTopicSubscriber implements Observer
{
    private Subject $subject;
    public function __construct(
        private string $name
    ) {
    }

    public function update(): void
    {
        $msg = $this->subject->getUpdate($this);
        if(empty($msg)) {
            dump("{$this->name} :: No new message");
            return;
        }

        dump("{$this->name} :: Consuming message:: {$msg}");
    }

    public function setSubject(Subject $subject): void
    {
        $this->subject = $subject;
    }
}
