<?php

namespace models\weapons;
use models\characteristics\WeaponCharacteristics;

class Bow extends Weapon
{
    private int $arrows;
    public function __construct()
    {
        parent::__construct("Bow", WeaponCharacteristics::bow_damage, WeaponCharacteristics::bow_atack_distance);
        $this->arrows = WeaponCharacteristics::bow_arrows_count;
    }

    public function getArrows(): int {
        return $this->arrows;
    }
    public function getAtack() : float
    {
        if($this->arrows > 0) {
            $this->arrows--;
            return $this->damage;
        }

        return 0;
    }

    public function addArrows($count) : void {
        if($count > 0) {
            $arrows = min(WeaponCharacteristics::bow_arrows_count, $this->arrows + $count);
        }
    }
}