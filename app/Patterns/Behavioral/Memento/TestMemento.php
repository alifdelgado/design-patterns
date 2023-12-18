<?php

namespace App\Patterns\Behavioral\Memento;

class TestMemento
{
    public function init()
    {
        $careTaker = new FileWriterCaretaker();
        $fileWriter = new FileWriterUtil("data.txt");
        $fileWriter->write("First set of data");

        dump($fileWriter->__toString());

        $careTaker->save($fileWriter);

        $fileWriter->write("Second set of data");

        dump($fileWriter->__toString());
        $careTaker->restore($fileWriter);

        dump($fileWriter->__toString());
    }
}
