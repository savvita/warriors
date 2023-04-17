<?php

namespace models\accessories;
use models\characteristics\AccessoryCharacteristics;
require_once "models/characteristics/AccessoryCharacteristics.php";
class Horse
{
    private $health;
    private $speed;

    private $name;

    public function __construct()
    {
        $this->name = "Horse";
        $this->health = AccessoryCharacteristics::horse_health;
        $this->speed = AccessoryCharacteristics::horse_speed;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function getHealth(): int
    {
        return $this->health;
    }

    public function getSpeed(): int
    {
        return $this->health > 0 ? $this->speed : 0;
    }


    public function getDamaged($damage) {
        $this->health = max($this->health - $damage, 0);
    }
}