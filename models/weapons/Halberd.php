<?php

namespace models\weapons;

use models\characteristics\WeaponCharacteristics;

require_once 'Weapon.php';
require_once "models/characteristics/WeaponCharacteristics.php";

class Halberd extends Weapon
{
    public function __construct()
    {
        parent::__construct("Halberd", WeaponCharacteristics::halberd_damage, WeaponCharacteristics::halberd_atack_distance);
    }

    public function getAtack()
    {
        return $this->damage;
    }
}