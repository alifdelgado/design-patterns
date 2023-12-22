<?php

namespace App\Patterns\Behavioral\Observer;

interface Observer
{
    public function update();
    public function setSubject(Subject $subject);
}
