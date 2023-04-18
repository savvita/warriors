<?php

namespace models\warriors;

abstract class Warrior
{
    protected $name;

    protected $health;
    protected $speed;
    protected $position;
    protected $fraction;


    protected $weapon;
    protected $armor;
    protected $shield;
    protected $horse;

    protected $coefficients = [
        "health" => 0,
        "damage" => 0,
        "speed" => 0
    ];

    protected function __construct($name, $speed, $health, $fraction) {
        $this->name = $name;
        $this->health = $health + $health * $fraction->getBuff()->getHealth();
        $this->speed = $speed + $speed * $fraction->getBuff()->getSpeed();

        $this->fraction = $fraction;
    }

    /* Getters */
    public function getName() {
        return $this->name;
    }
    public function getSpeed() {
        $speed = $this->speed + $this->speed * $this->coefficients["speed"];
        return $speed + ($this->horse !== null ? $this->horse->getSpeed() : 0);
    }
    public function getHealth() {
        $health = $this->health + $this->health * $this->coefficients["health"];
        if($this->armor != null) {
            $health += $this->armor->getHealth();
        }
        return $health;
    }

    public function getArmor() {
        return $this->armor;
    }

    public function getWeapon() {
        return $this->weapon;
    }

    public function getShield() {
        return $this->shield;
    }

    public function getPosition() {
        return $this->position;
    }

    public function getHorse(){
        return $this->horse;
    }

    public function getFraction() {
        return $this->fraction;
    }

    public function getSpeedCoefficient()  {
        return $this->coefficients["speed"];
    }
    /* End Getters */

    /* Setters */
    public function setHealthCoefficient($coeff) {
        if($coeff === null || $coeff < 0 || $coeff > 1) {
            return;
        }

        $this->coefficients["health"] = $coeff;
    }

    public function setSpeedCoefficient($coeff) {
        if($coeff === null || $coeff < 0 || $coeff > 1) {
            return;
        }

        $this->coefficients["speed"] = $coeff;
    }

    public function setDamageCoefficient($coeff) {
        if($this->weapon === null) {
            return;
        }

        if($coeff === null || $coeff < 0 || $coeff > 1) {
            return;
        }

        $this->coefficients["damage"] = $coeff;

        $this->weapon->setDamageCoefficient($coeff);
    }

    /* End Setters */


    /* Add-ons */
    public function addArmor($armor) {
        $this->armor = $armor;
        $this->speed = max($this->speed * (1 - $armor->getWeight()), 0);
    }

    public function addWeapon($weapon) {
        $this->weapon = $weapon;
        $this->setDamageCoefficient($this->fraction->getBuff()->getDamage());
    }

    public function addShield($shield) {
        $this->shield = $shield;
    }

    public function addHorse($horse) {
        $this->horse = $horse;
    }
    /*End Add-ons */


    /* Actions */
    public function atack($warrior) {
        if($warrior === null) {
            return;
        }

        if($this->health <= 0 || $this->weapon === null) {
            return;
        }

        /* If is on the distance of atack */
        $warrior->defend($this);
    }
    public function defend($warrior)
    {
        if($warrior === null || $warrior->getWeapon() === null) {
            return;
        }

        $coeff = 1 / $this->getSpeed();
        $damage = rand($coeff, 1) * $warrior->getWeapon()->getDamage();

        if($this->shield !== null) {
            $damage -= $this->shield->getArmor();
        }

        if($damage > 0 && $this->horse !== null) {
            $damage = $damage / 2;
            $this->horse->getDamaged($damage);
            if($this->horse->getHealth() === 0) {
                $this->removeHorse();
            }
        }

        if($damage > 0 && $this->armor !== null) {
            $this->armor->getDamaged($damage * (1 - $this->armor->getDamagePercentage()));
            $damage = $damage * $this->armor->getDamagePercentage();
            if($this->armor->getHealth() <= 0) {
                $this->removeArmor();
            }
        }

        if($damage > 0) {
            $this->health = max($this->health - $damage / (1 + $this->coefficients["health"]), 0);
        }
    }
    public function move() {
        if($this->horse !== null && $this->horse->getHealth() > 0) {
            return 'Тыгыдык со скоростью коня';
        }

        if($this->health > 0) {
            return 'Тыгыдык со скоростью воина';
        }

        return 'Тыгыдык со скоростью зомби';
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

    protected function removeHorse() {
        $this->horse = null;
    }
    /* End handle dead */
}
