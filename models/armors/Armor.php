<?php

namespace models\armors;

abstract class Armor
{
    protected $name;
    protected $health;
    protected $weight;
    protected $damage_percentage;

    protected function __construct($name, $health, $weight, $damage_percentage) {
        $this->name = $name;
        $this->weight = $weight;
        $this->health = $health;
        $this->damage_percentage = $damage_percentage;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getHealth()
    {
        return $this->health;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function getDamagePercentage()
    {
        return $this->damage_percentage;
    }

    public function getDamaged($damage)
    {
        $val = $this->health - $damage * $this->damage_percentage;
        $this->health = max($val,0);
    }
}