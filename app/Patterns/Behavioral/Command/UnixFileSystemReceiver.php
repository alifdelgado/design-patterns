<?php

namespace App\Patterns\Behavioral\Command;

class UnixFileSystemReceiver implements FileSystemReceiver
{
    public function openFile()
    {
        dump("Opening file in Unix OS");
    }

    public function writeFile()
    {
        dump("Writing file in Unix OS");
    }

    public function closeFile()
    {
        dump("Closing file in Unix OS");
    }
}
