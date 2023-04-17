<?php

namespace models\warriors;

use models\accessories\Horse;
use models\characteristics\WarriorCharacteristic;

class Walking extends Warrior
{
    public function __construct()
    {
        parent::__construct("Walking warrior", WarriorCharacteristic::warrior_speed, WarriorCharacteristic::warrior_health);
    }
}