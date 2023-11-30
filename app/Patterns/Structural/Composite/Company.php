<?php

namespace App\Patterns\Structural\Composite;

class Company
{
    public function init(): void
    {
        $seniorDeveloper = new Developer(100, "Evan You", "Senior Developer");
        $midDeveloper = new Developer(150, "Jane Doe", "Mid Developer");
        $engDirectory = new Manager("Marina Mostic", 50000);
        $engDirectory->addEmployee($seniorDeveloper);
        $engDirectory->addEmployee($midDeveloper);

        $firstManager = new ProjectManager(200, "Bob", "First manager");
        $secondManager = new ProjectManager(250, "Alice", "Second manager");
        $accDirectory = new Manager("Michael Thiessen", 50000);
        $accDirectory->addEmployee($firstManager);
        $accDirectory->addEmployee($secondManager);

        $ceo = new Manager("John Doe", 10000000);
        $ceo->addEmployee($engDirectory);
        $ceo->addEmployee($accDirectory);
        $ceo->showEmployeeDetails();
    }
}
