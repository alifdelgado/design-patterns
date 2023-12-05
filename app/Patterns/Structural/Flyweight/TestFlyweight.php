<?php

namespace App\Patterns\Structural\Flyweight;

class TestFlyweight
{
    public function init()
    {
        $myFactory = new RobotFactory();
        dump("***Flyweight Pattern example***");

        for($i = 0; $i < 2; $i++) {
            $shape = $myFactory->getRobotFromFactory("King");
            $shape->setColor($this->getRandomColor());
            $shape->print();
        }

        $numDistinctRobots = $myFactory->totalObjectsCreated();
        dump("Distinct Robot objects created till now: $numDistinctRobots");

        for($i = 0; $i < 5; $i++) {
            $shape = $myFactory->getRobotFromFactory("Queen");
            $shape->setColor($this->getRandomColor());
            $shape->print();
        }

        $numDistinctRobots = $myFactory->totalObjectsCreated();
        dump("Finally number of distinct Robots created: $numDistinctRobots");
    }

    public function getRandomColor(): string
    {
        $colors = ['red', 'green', 'blue', 'yellow'];
        $key = array_rand($colors);
        return $colors[$key];
    }
}
