<?php

namespace models\weapons;
use models\characteristics\WeaponCharacteristics;

require_once 'Weapon.php';
require_once "models/characteristics/WeaponCharacteristics.php";

class Peak extends Weapon
{
    public function __construct()
    {
        parent::__construct("Peak", WeaponCharacteristics::peak_damage, WeaponCharacteristics::peak_atack_distance);
    }

    public function getAtack()
    {
        return $this->damage;
    }
}