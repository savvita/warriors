<?php

namespace models\weapons;

use models\characteristics\WeaponCharacteristics;

class Spear extends Weapon
{
    public function __construct()
    {
        parent::__construct("Spear", WeaponCharacteristics::spear_damage, WeaponCharacteristics::spear_atack_distance);
    }

    public function getAtack() : float {
        return $this->damage;
    }
}