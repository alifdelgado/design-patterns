<?php

namespace App\Patterns\Behavioral\Observer;

class TestObserver
{
    public function init()
    {
        $topic = new MyTopic();

        $firstSubscriber = new MyTopicSubscriber('Subscriber 1');
        $secondSubscriber = new MyTopicSubscriber('Subscriber 2');
        $thirdSubscriber = new MyTopicSubscriber('Subscriber 3');

        $topic->register($firstSubscriber);
        $topic->register($secondSubscriber);
        $topic->register($thirdSubscriber);

        $firstSubscriber->setSubject($topic);
        $secondSubscriber->setSubject($topic);
        $thirdSubscriber->setSubject($topic);

        $firstSubscriber->update();

        $topic->postMessage('Hello World');
    }
}
