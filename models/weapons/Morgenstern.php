<?php

namespace models\weapons;

use models\characteristics\WeaponCharacteristics;

require_once 'Weapon.php';
require_once "models/characteristics/WeaponCharacteristics.php";

class Morgenstern extends Weapon
{
    public function __construct()
    {
        parent::__construct("Morgenstern", WeaponCharacteristics::morgenstern_damage, WeaponCharacteristics::morgenstern_atack_distance);
    }

    public function getAtack()
    {
        return $this->damage;
    }
}