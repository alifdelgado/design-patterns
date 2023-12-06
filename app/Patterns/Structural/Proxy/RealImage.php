<?php

namespace App\Patterns\Structural\Proxy;

class RealImage implements Image
{
    public function __construct(private string $fileName)
    {
        $this->loadFromDisk($this->fileName);
    }

    public function display(): void
    {
        dump("Displaying $this->fileName");
    }

    private function loadFromDisk(string $fileName): void
    {
        dump("Loading $fileName");
    }
}
