<?php

namespace App\Patterns\Behavioral\Memento;

use Illuminate\Support\Collection;

class Memento
{
    public function __construct(
        public string $filename,
        public Collection $content
    ) {
    }

    /**
     * Get the value of filename
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Get the value of content
     */
    public function getContent()
    {
        return $this->content;
    }
}
