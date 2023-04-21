<?php

namespace models\weapons;

use models\characteristics\WeaponCharacteristics;

require_once 'Weapon.php';
require_once "models/characteristics/WeaponCharacteristics.php";

class Axe extends Weapon
{
    public function __construct()
    {
        parent::__construct("Axe", WeaponCharacteristics::axe_damage, WeaponCharacteristics::axe_atack_distance);
    }

    public function getAtack(): float{
        return $this->damage;
    }
}