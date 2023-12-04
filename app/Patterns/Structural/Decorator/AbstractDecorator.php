<?php

namespace App\Patterns\Structural\Decorator;

abstract class AbstractDecorator extends Component
{
    protected Component $component;

    /**
     * Set the value of component
     *
     * @return  self
     */
    public function setComponent($component)
    {
        $this->component = $component;
        return $this;
    }

    public function doJob()
    {
        if ($this->component) {
            $this->component->doJob();
        }
    }
}
