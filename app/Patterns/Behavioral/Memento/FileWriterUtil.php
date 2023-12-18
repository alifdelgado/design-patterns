<?php

namespace App\Patterns\Behavioral\Memento;

use Illuminate\Support\Collection;

class FileWriterUtil
{
    private Collection $content;
    public function __construct(
        private string $filename
    ) {
        $this->content = collect();
    }

    public function write(string $str): void
    {
        $this->content->push($str);
    }

    public function save(): Memento
    {
        return new Memento($this->filename, $this->content);
    }

    public function restore(Memento $memento): void
    {
        $this->filename = $memento->getFilename();
        $this->content = collect($memento->getContent()->first());
    }

    public function __toString(): string
    {
        return $this->content->implode("\n");
    }
}
