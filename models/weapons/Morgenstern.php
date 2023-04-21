<?php

namespace models\weapons;

use models\characteristics\WeaponCharacteristics;

class Morgenstern extends Weapon
{
    public function __construct()
    {
        parent::__construct("Morgenstern", WeaponCharacteristics::morgenstern_damage, WeaponCharacteristics::morgenstern_atack_distance);
    }

    public function getAtack() : float {
        return $this->damage;
    }
}