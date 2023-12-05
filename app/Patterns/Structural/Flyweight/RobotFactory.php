<?php

namespace App\Patterns\Structural\Flyweight;

use Exception;
use Illuminate\Support\Collection;

class RobotFactory
{
    /**
     * Summary of shapes
     * @var Collection<string, RobotInterface>
     */
    private Collection $shapes;

    public function __construct()
    {
        $this->shapes = collect();
    }

    public function totalObjectsCreated()
    {
        return $this->shapes->count();
    }

    public function getRobotFromFactory(string $robotType): RobotInterface
    {
        $myRobot = null;
        if($this->shapes->has($robotType)) {
            dump("We have $robotType robot");
            $myRobot = $this->shapes->get($robotType);
            return $myRobot;
        }

        switch($robotType) {
            case "King":
                dump("We don't have king robot");
                $myRobot = new Robot("King");
                $this->shapes->put("King", $myRobot);
                break;
            case "Queen":
                dump("We don't have queen robot");
                $myRobot = new Robot("Queen");
                $this->shapes->put("Queen", $myRobot);
                break;
            default:
                throw new Exception("We don't have robot");
        }
        return $myRobot;
    }
}
