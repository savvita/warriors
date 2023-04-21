<?php

namespace models\weapons;

abstract class Weapon
{
    protected string $name;
    protected float $damage;
    protected float $atack_distance;
    protected float $damage_coefficient = 0;

    protected function __construct($name, $damage, $atack_distance) {
        $this->setName($name);
        $this->setDamage($damage);
        $this->setAtackDistance($atack_distance);
    }

    /* Getters */
    public function getName() :string {
        return $this->name;
    }
    public function getDamage() : float {
        return $this->damage + $this->damage * $this->damage_coefficient;
    }
    public function getAtackDistance() : float {
        return $this->atack_distance;
    }

    /* End Getters */

    /* Setters */
    public function setName(string $name): void {
        if($name === null || empty($name)) {
            return;
        }
        $this->name = $name;
    }

    public function setAtackDistance(float $atack_distance): void {
        if($atack_distance > 0) {
            $this->atack_distance = $atack_distance;
        }
    }

    public function setDamage($damage) : void {
        $this->damage = max($damage, 0);
    }
    public function setDamageCoefficient($coeff) {
        if($coeff === null || $coeff < 0 || $coeff > 1) {
            return;
        }

        $this->damage_coefficient = $coeff;
    }
    /* End Setters */

    /* Actions */
    public abstract function getAtack() : float;

    /* End Actions */

}