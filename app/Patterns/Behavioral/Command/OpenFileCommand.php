<?php

namespace App\Patterns\Behavioral\Command;

class OpenFileCommand implements Command
{
    public function __construct(private FileSystemReceiver $fileSystemReceiver)
    {
    }

    public function execute()
    {
        $this->fileSystemReceiver->openFile();
    }

    public function undo()
    {
        dump("Undo OpenFileCommand");
    }
}
