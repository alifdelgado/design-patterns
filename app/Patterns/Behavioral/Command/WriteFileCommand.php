<?php

namespace App\Patterns\Behavioral\Command;

class WriteFileCommand implements Command
{
    public function __construct(private FileSystemReceiver $fileSystemReceiver)
    {
    }

    public function execute()
    {
        $this->fileSystemReceiver->writeFile();
    }

    public function undo()
    {
        dump("Undo WriteFileCommand");
    }
}
