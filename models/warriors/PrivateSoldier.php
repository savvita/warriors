<?php

namespace models\warriors;

use models\characteristics\WarriorCharacteristic;
require_once "models\warriors\Warrior.php";
require_once "models/characteristics/WarriorCharacteristic.php";

class PrivateSoldier extends Warrior
{
    public function __construct($fraction)
    {
        parent::__construct("Private", WarriorCharacteristic::warrior_speed, WarriorCharacteristic::warrior_health, $fraction);
    }
}