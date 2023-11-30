<?php

namespace App\Patterns\Structural\Composite;

class Developer implements Employee
{
    public function __construct(
        private int $employeeId,
        private string $name,
        private string $position
    ) {
    }

    public function showEmployeeDetails()
    {
        dump($this->employeeId . " " . $this->name . " " . $this->position);
    }
}
