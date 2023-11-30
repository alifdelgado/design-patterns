<?php

namespace App\Patterns\Structural\Composite;

use Illuminate\Support\Collection;

class Manager implements Employee
{
    private Collection $employees;
    public function __construct(
        private string $name,
        private float $salary
    ) {
        $this->employees = new Collection();
    }

    public function showEmployeeDetails()
    {
        dump("----------------------------");
        dump("Name: {$this->getName()}");
        dump("Salary: {$this->getSalary()}");
        dump("----------------------------");
        $this->employees->each(fn (Employee $employee) => $employee->showEmployeeDetails());
    }

    public function addEmployee(Employee $employee)
    {
        $this->employees->add($employee);
    }

    public function removeEmployee(Employee $employee)
    {
        $this->employees->remove($employee);
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of salary
     */
    public function getSalary()
    {
        return $this->salary;
    }
}
