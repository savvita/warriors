<?php

namespace models\weapons;
use models\characteristics\WeaponCharacteristics;

class Peak extends Weapon
{
    public function __construct()
    {
        parent::__construct("Peak", WeaponCharacteristics::peak_damage, WeaponCharacteristics::peak_atack_distance);
    }

    public function getAtack() : float {
        return $this->damage;
    }
}