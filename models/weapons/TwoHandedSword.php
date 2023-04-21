<?php

namespace models\weapons;

use models\characteristics\WeaponCharacteristics;

class TwoHandedSword extends Weapon
{
    public function __construct()
    {
        parent::__construct("Two-handed sword", WeaponCharacteristics::two_handed_sword_damage, WeaponCharacteristics::two_handed_sword_atack_distance);
    }

    public function getAtack() : float {
        return $this->damage;
    }
}