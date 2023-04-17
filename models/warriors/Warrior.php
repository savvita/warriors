<?php

namespace models\warriors;

abstract class Warrior
{
    protected $name;
    protected $health;
    protected $speed;
    protected $position;

    protected $weapon;
    protected $armor;
    protected $shield;

    protected function __construct($name, $speed, $health) {
        $this->health = $health;
        $this->name = $name;
        $this->speed = $speed;
    }

    public function getSpeed()
    {
        return $this->speed;
    }
    public function getHealth()
    {
        $health = $this->health;
        if($this->armor != null) {
            $health += $this->armor->getHealth();
        }
        return $health;
    }
    public function getName()
    {
        return $this->name;
    }

    public function getArmor()
    {
        return $this->armor;
    }

    public function getWeapon()
    {
        return $this->weapon;
    }

    public function getShield()
    {
        return $this->shield;
    }

    public function getPosition()
    {
        return $this->position;
    }
    public function addArmor($armor) {
        $this->armor = $armor;
        $this->speed = max($this->speed * (1 - $armor->getWeight()), 0);
    }

    public function addWeapon($weapon) {
        $this->weapon = $weapon;
    }

    public function addShield($shield) {
        $this->shield = $shield;
    }

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

        if($damage > 0 && $this->armor !== null) {
            $this->armor->getDamaged($damage * (1 - $this->armor->getDamagePercentage()));
            $damage = $damage * $this->armor->getDamagePercentage();
        }

        if($damage > 0) {
            $this->health = max($this->health - $damage, 0);
        }
    }
    public function move() {
        if($this->health > 0) {
            return 'Тыгыдык со скоростью воина';
        }

        return 'Тыгыдык со скоростью зомби';
    }
}
