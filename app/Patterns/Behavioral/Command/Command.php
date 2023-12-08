<?php

namespace App\Patterns\Behavioral\Command;

interface Command
{
    public function execute();
    public function undo();
}
