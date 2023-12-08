<?php

namespace App\Patterns\Behavioral\Command;

class FileSystemReceiverUtil
{
    public function getUnderLyingFileSystem(): FileSystemReceiver
    {
        $osName = strtoupper(substr(PHP_OS, 0, 3));
        if ($osName === 'WIN') {
            dump('I am running on Windows');
            return new WindowsFileSystemReceiver();
        }

        dump('I am running on Unix');
        return new UnixFileSystemReceiver();
    }
}
