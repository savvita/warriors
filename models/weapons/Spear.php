<?php

namespace models\weapons;

use models\characteristics\WeaponCharacteristics;

require_once 'Weapon.php';
require_once "models/characteristics/WeaponCharacteristics.php";

class Spear extends Weapon
{
    public function __construct()
    {
        parent::__construct("Spear", WeaponCharacteristics::spear_damage, WeaponCharacteristics::spear_atack_distance);
    }

    public function getAtack()
    {
        return $this->damage;
    }
}