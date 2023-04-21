<?php

namespace models\weapons;

use models\characteristics\WeaponCharacteristics;

class Saber extends Weapon
{
    public function __construct()
    {
        parent::__construct("Saber", WeaponCharacteristics::saber_damage, WeaponCharacteristics::saber_atack_distance);
    }

    public function getAtack() : float{
        return $this->damage;
    }
}