<?php

namespace models\weapons;

use models\characteristics\WeaponCharacteristics;

class Halberd extends Weapon
{
    public function __construct()
    {
        parent::__construct("Halberd", WeaponCharacteristics::halberd_damage, WeaponCharacteristics::halberd_atack_distance);
    }

    public function getAtack() : float {
        return $this->damage;
    }
}