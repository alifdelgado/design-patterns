<?php

namespace App\Patterns\Behavioral\Memento;

use Illuminate\Support\Collection;

class FileWriterCaretaker
{
    private Collection $obj;

    public function __construct()
    {
        $this->obj = collect();
    }

    public function save(FileWriterUtil $writer): void
    {
        $this->obj->push($writer->save());
    }

    public function restore(FileWriterUtil $writer): void
    {
        if(!$this->obj->isEmpty()) {
            $writer->restore($this->obj->pop());
        }
    }
}
