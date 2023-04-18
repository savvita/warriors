<?php

namespace models\achievements;

abstract class Achievement
{
    private $name;
    private $description;
    protected $values = [
        "health" => 0,
        "damage" => 0,
        "speed" => 0
    ];

    protected function __construct($name)
    {
        $this->name = $name;
    }

    /* Getters */
    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }
    public function getHealth() : int {
        return $this->values["health"];
    }

    public function getDamage() : int {
        return $this->values["damage"];
    }

    public function getSpeed() : int {
        return $this->values["speed"];
    }
    /* End Getters */

    /* Setters */
    protected function setDescription($description) {
        $this->description = $description;
    }
    /* End Setters */

    /* Add-ons */
    protected function addHealth($value) {
        $this->values["health"] = $value;
    }

    protected function addDamage($value) {
        $this->values["damage"] = $value;
    }

    protected function addSpeed($value) {
        $this->values["speed"] = $value;
    }
    /* End Add-ons */
}