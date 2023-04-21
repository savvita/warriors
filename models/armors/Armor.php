<?php

namespace models\armors;

abstract class Armor
{
    protected string $name;
    protected float $health;
    protected float $weight;
    protected float $damage_percentage;

    protected function __construct($name, $health, $weight, $damage_percentage) {
        if($name !== null && !empty($name)) {
            $this->name = $name;
        }

        if($weight >= 0 && $weight <= 1) {
            $this->weight = $weight;
        }
        if($health >= 0) {
            $this->health = $health;
        }

        if($damage_percentage >= 0 && $damage_percentage <= 1) {
            $this->damage_percentage = $damage_percentage;
        }
    }

    /* Getters */
    public function getName() : string {
        return $this->name;
    }

    public function getHealth() : float {
        return $this->health;
    }

    public function getWeight() : float {
        return $this->weight;
    }

    public function getDamagePercentage() : float {
        return $this->damage_percentage;
    }

    /* End Getters */

    /* Actions */
    public function getDamaged($damage) : void {
        if($damage <= 0) {
            return;
        }

        $val = $this->health - $damage * $this->damage_percentage;
        $this->health = max($val,0);
    }
    /* End Actions */
}