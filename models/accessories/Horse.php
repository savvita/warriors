<?php

namespace models\accessories;
use models\characteristics\AccessoryCharacteristics;

class Horse
{
    private float $health;
    private float $speed;

    private string $name;

    private $armor;

    public function __construct()
    {
        $this->name = "Horse";
        $this->health = AccessoryCharacteristics::horse_health;
        $this->speed = AccessoryCharacteristics::horse_speed;
    }

    /* Getters */
    public function getName(): string {
        return $this->name;
    }
    public function getHealth(): float {
        return $this->health;
    }

    public function getSpeed(): float {
        return $this->health > 0 ? $this->speed : 0;
    }

    public function getArmor() {
        return $this->armor;
    }

    /* End Getters */

    /* Add-ons */
    public function addArmor($armor) {
        if($armor === null) {
            return;
        }

        $this->armor = $armor;
        $this->speed = max($this->speed * (1 - $armor->getWeight()), 0);
    }

    /*End Add-ons */

    /* Actions */
    public function getDamaged($damage) {
        if($damage <= 0) {
            return;
        }

        if($this->armor !== null) {
            $this->armor->getDamaged($damage * (1 - $this->armor->getDamagePercentage()));
            $damage = $damage * $this->armor->getDamagePercentage();
            if($this->armor->getHealth() <= 0) {
                $this->removeArmor();
            }
        }

        if($damage > 0) {
            $this->health = max($this->health - $damage, 0);
        }
    }
    /* End Actions */

    /* Handle dead */
    protected function removeArmor() {
        if($this->armor === null) {
            return;
        }
        $this->speed = max($this->speed / (1 - $this->armor->getWeight()), 0);
        $this->armor = null;
    }

    /* End handle dead */
}