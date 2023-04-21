<?php

namespace models\weather;

abstract class Weather
{
    private string $name;
    private string $description;
    private float $value;

    protected function __construct($name, $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    /* Getters */
    public function getName() : string {
        return $this->name;
    }

    public function getValue() : float {
        return $this->value;
    }

    public function getDescription() : string {
        return $this->description;
    }

    /* End Getters */

    /* Add-ons */
    protected function addDescription($description) : void {
        $this->description = $description;
    }
    /* End Add-ons */
}