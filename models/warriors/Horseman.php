<?php

namespace models\warriors;
use models\accessories\Horse;
use models\characteristics\WarriorCharacteristic;

require_once 'Warrior.php';
require_once "models/characteristics/WarriorCharacteristic.php";
require_once "models/accessories/Horse.php";

class Horseman extends Warrior
{
    private $horse;

    public function __construct()
    {
        parent::__construct("Horseman", WarriorCharacteristic::warrior_speed, WarriorCharacteristic::warrior_health);
        $this->horse = new Horse();
    }

    public function getSpeed()
    {
        return parent::getSpeed() + ($this->horse !== null ? $this->horse->getSpeed() : 0);
    }

    public function getHorse(): Horse
    {
        return $this->horse;
    }

    public function move()
    {
        if($this->horse !== null && $this->horse->getHealth() > 0) {
            return 'Тыгыдык со скоростью коня';
        }

        if($this->health > 0) {
            return 'Тыгыдык со скоростью воина';
        }

        return 'Тыгыдык со скоростью зомби';
    }
}