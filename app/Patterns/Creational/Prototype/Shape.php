<?php

namespace App\Patterns\Creational\Prototype;

abstract class Shape
{
    private string $id;
    protected string $type;

    abstract public function draw(): void;

    /**
     * Get the value of id
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id): Shape
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of type
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */
    public function setType($type): Shape
    {
        $this->type = $type;

        return $this;
    }

    public function __clone()
    {
        $this->id = clone $this->id;
        $this->type = clone $this->type;
    }
}
