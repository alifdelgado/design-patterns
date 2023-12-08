<?php

namespace App\Patterns\Behavioral\Command;

class WindowsFileSystemReceiver implements FileSystemReceiver
{
    public function openFile()
    {
        dump("Opening file in Windows OS");
    }

    public function writeFile()
    {
        dump("Writing file in Windows OS");
    }

    public function closeFile()
    {
        dump("Closing file in Windows OS");
    }
}
