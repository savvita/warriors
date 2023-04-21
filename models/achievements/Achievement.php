<?php

namespace models\achievements;

abstract class Achievement
{
    private string $name;
    private string $description;
    protected array $values = [
        "health" => 0.0,
        "damage" => 0.0,
        "speed" => 0.0
    ];

    protected function __construct($name)
    {
        $this->name = $name;
    }

    /* Getters */
    public function getName() : string {
        return $this->name;
    }

    public function getDescription() : string {
        return $this->description;
    }
    public function getHealth() : float {
        return $this->values["health"];
    }

    public function getDamage() : float {
        return $this->values["damage"];
    }

    public function getSpeed() : float {
        return $this->values["speed"];
    }
    /* End Getters */

    /* Setters */
    protected function setDescription($description) : void {
        if($description === null) {
            return;
        }
        $this->description = $description;
    }
    /* End Setters */

    /* Add-ons */
    protected function addHealth($value) : void {
        if($value === null) {
            return;
        }
        $this->values["health"] = $value;
    }

    protected function addDamage($value) : void {
        if($value === null) {
            return;
        }
        $this->values["damage"] = $value;
    }

    protected function addSpeed($value) : void {
        if($value === null) {
            return;
        }
        $this->values["speed"] = $value;
    }
    /* End Add-ons */
}