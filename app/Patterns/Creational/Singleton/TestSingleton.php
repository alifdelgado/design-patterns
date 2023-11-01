<?php

namespace App\Patterns\Creational\Singleton;

class TestSingleton
{
    private Singleton $singleton;

    public function init()
    {
        $this->singleton = Singleton::getInstance();
        $this->singleton->setData(1);

        dump('Lazy initialization:');
        dump('First reference: ', $this->singleton);
        dump('Singleton data value is: ', $this->singleton->getData());
    }
}
