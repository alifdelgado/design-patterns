<?php

namespace App\Patterns\Behavioral\Command;

class TestCommand
{
    public function init()
    {
        $fs = (new FileSystemReceiverUtil())->getUnderLyingFileSystem();
        $openFileCommand = new OpenFileCommand($fs);
        $fileInvoker = new FileInvoker($openFileCommand);
        $fileInvoker->execute();

        $writeFileCommand = new WriteFileCommand($fs);
        $fileInvoker = new FileInvoker($writeFileCommand);
        $fileInvoker->execute();

        $closeFileCommand = new CloseFileCommand($fs);
        $fileInvoker = new FileInvoker($closeFileCommand);
        $fileInvoker->execute();
    }
}
