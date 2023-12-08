<?php

namespace App\Patterns\Behavioral\Command;

class FileInvoker
{
    public function __construct(private Command $command)
    {
    }

    public function execute()
    {
        $this->command->execute();
    }
}
