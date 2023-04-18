<?php

namespace models\weapons;

abstract class Weapon
{
    protected $name;
    protected $damage;
    protected $atack_distance;
    protected $damage_coefficient = 0;

    protected function __construct($name, $damage, $atack_distance) {
        $this->damage = $damage;
        $this->name = $name;
        $this->atack_distance = $atack_distance;
    }

    /* Getters */
    public function getName() {
        return $this->name;
    }
    public function getDamage() {
        return $this->damage + $this->damage * $this->damage_coefficient;
    }
    public function getAtackDistance() {
        return $this->atack_distance;
    }
    /* End Getters */

    /* Setters */
    public function setDamageCoefficient($coeff) {
        if($coeff === null || $coeff < 0 || $coeff > 1) {
            return;
        }

        $this->damage_coefficient = $coeff;
    }
    /* End Setters */

    public abstract function getAtack();

    public function setDamage($damage) {
        $this->damage = max($damage, 0);
    }
}