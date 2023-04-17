<?php

namespace models\weapons;

use models\characteristics\WeaponCharacteristics;

require_once 'Weapon.php';
require_once "models/characteristics/WeaponCharacteristics.php";

class OneHandedSword extends Weapon
{
    public function __construct()
    {
        parent::__construct("One-handed sword", WeaponCharacteristics::one_handed_sword_damage, WeaponCharacteristics::one_handed_sword_atack_distance);
    }

    public function getAtack()
    {
        return $this->damage;
    }
}