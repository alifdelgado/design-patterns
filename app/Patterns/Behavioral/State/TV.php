<?php

namespace App\Patterns\Behavioral\State;

class TV
{
    public function __construct(
        private RemoteControl $state
    ) {
    }

    /**
     * Get the value of state
     */
    public function getState(): RemoteControl
    {
        return $this->state;
    }

    /**
     * Set the value of state
     *
     * @return  self
     */
    public function setState(RemoteControl $state)
    {
        $this->state = $state;

        return $this;
    }

    public function pressButton()
    {
        $this->state->pressSwitch($this);
    }
}
