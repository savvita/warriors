<?php

namespace models\weapons;
use models\characteristics\WeaponCharacteristics;

require_once 'Weapon.php';
require_once "models/characteristics/WeaponCharacteristics.php";
class Bow extends Weapon
{
    private $arrows;
    public function __construct()
    {
        parent::__construct("Bow", WeaponCharacteristics::bow_damage, WeaponCharacteristics::bow_atack_distance);
        $this->arrows = WeaponCharacteristics::bow_arrows_count;
    }

    public function getArrows(): int
    {
        return $this->arrows;
    }
    public function getAtack()
    {
        if($this->arrows > 0) {
            $this->arrows--;
            return $this->damage;
        }

        return 0;
    }

    public function addArrows($count) {
        if($count > 0) {
            $arrows = min(WeaponCharacteristics::bow_arrows_count, $this->arrows + $count);
        }
    }
}