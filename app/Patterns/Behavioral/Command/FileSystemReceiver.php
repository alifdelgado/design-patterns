<?php

namespace App\Patterns\Behavioral\Command;

interface FileSystemReceiver
{
    public function openFile();
    public function writeFile();
    public function closeFile();
}
