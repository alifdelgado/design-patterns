<?php

namespace App\Patterns\Structural\Proxy;

class ProxyImage implements Image
{
    private RealImage $image;

    public function __construct(private string $fileName)
    {
    }

    public function display(): void
    {
        if(!isset($this->image)) {
            $this->image = new RealImage($this->fileName);
        }
        $this->image->display();
    }
}
