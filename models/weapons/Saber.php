<?php

namespace models\weapons;

use models\characteristics\WeaponCharacteristics;

require_once 'Weapon.php';
require_once "models/characteristics/WeaponCharacteristics.php";

class Saber extends Weapon
{
    public function __construct()
    {
        parent::__construct("Saber", WeaponCharacteristics::saber_damage, WeaponCharacteristics::saber_atack_distance);
    }

    public function getAtack()
    {
        return $this->damage;
    }
}