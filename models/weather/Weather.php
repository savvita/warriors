<?php

namespace models\weather;

abstract class Weather
{
    private $name;
    private $description;
    private $value;

    protected function __construct($name, $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    /* Getters */
    public function getName() {
        return $this->name;
    }

    public function getValue() {
        return $this->value;
    }

    public function getDescription() {
        return $this->description;
    }

    /* End Getters */

    /* Add-ons */
    protected function addDescription($description) {
        $this->description = $description;
    }
    /* End Add-ons */
}