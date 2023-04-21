<?php

namespace models\weapons;

use models\characteristics\WeaponCharacteristics;

class OneHandedSword extends Weapon
{
    public function __construct()
    {
        parent::__construct("One-handed sword", WeaponCharacteristics::one_handed_sword_damage, WeaponCharacteristics::one_handed_sword_atack_distance);
    }

    public function getAtack() : float{
        return $this->damage;
    }
}