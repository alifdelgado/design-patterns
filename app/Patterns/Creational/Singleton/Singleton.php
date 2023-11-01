<?php

namespace App\Patterns\Creational\Singleton;

class Singleton
{
    private static $instance;
    private int $data = 0;

    private function __construct()
    {
    }

    public static function getInstance(): Singleton
    {
        if (!isset(self::$instance)) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }

    /**
     * Set the value of data
     *
     * @return void
     */
    public function setData($data): void
    {
        $this->data = $data;
    }

    /**
     * Get the value of data
     */
    public function getData(): int
    {
        return $this->data;
    }
}
