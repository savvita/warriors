<?php

namespace models\weapons;

abstract class Weapon
{
    protected $name;
    protected $damage;
    protected $atack_distance;

    protected function __construct($name, $damage, $atack_distance) {
        $this->damage = $damage;
        $this->name = $name;
        $this->atack_distance = $atack_distance;
    }

    public abstract function getAtack();

    public function getAtackDistance()
    {
        return $this->atack_distance;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getDamage()
    {
        return $this->damage;
    }
}