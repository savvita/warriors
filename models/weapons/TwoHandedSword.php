<?php

namespace models\weapons;

use models\characteristics\WeaponCharacteristics;

require_once 'Weapon.php';
require_once "models/characteristics/WeaponCharacteristics.php";

class TwoHandedSword extends Weapon
{
    public function __construct()
    {
        parent::__construct("Two-handed sword", WeaponCharacteristics::two_handed_sword_damage, WeaponCharacteristics::two_handed_sword_atack_distance);
    }

    public function getAtack()
    {
        return $this->damage;
    }
}