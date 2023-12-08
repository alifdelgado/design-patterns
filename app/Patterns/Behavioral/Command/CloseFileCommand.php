<?php

namespace App\Patterns\Behavioral\Command;

class CloseFileCommand implements Command
{
    public function __construct(private FileSystemReceiver $fileSystemReceiver)
    {
    }

    public function execute()
    {
        $this->fileSystemReceiver->closeFile();
    }

    public function undo()
    {
        dump("Undo CloseFileCommand");
    }
}
