<?php

namespace models\warriors;

use models\characteristics\WarriorCharacteristic;

require_once "models\warriors\Warrior.php";
require_once "models/characteristics/WarriorCharacteristic.php";

class Commander extends Warrior
{
    private $title;
    private $achievements = [];
    public function __construct($title)
    {
        parent::__construct("Commander", WarriorCharacteristic::warrior_speed, WarriorCharacteristic::warrior_health);
        $this->title = $title;
    }

    /* Getters */
    public function getTitle() {
        return $this->title;
    }
    public function getAchievements() : array {
        return $this->achievements;
    }
    /* End Getters */

    /* Add-ons */
    public function addAchievement($achievement) {
        $this->achievements[] = $achievement;
    }
    /* End Add-ons */

    /* Actions */
    public function useAchievement($squad, $idx = 0) {
        if(!$squad || !is_array($squad->getWarriors())) {
            return;
        }

        if($idx < 0 || $idx >= count($this->achievements)) {
            return;
        }

        $warriors = $squad->getWarriors();
        $health = 1 + $this->achievements[$idx]->getHealth();
        $damage = 1 + $this->achievements[$idx]->getDamage();
        $speed = 1 + $this->achievements[$idx]->getSpeed();

        foreach($warriors as $warrior) {
            $warrior->setHealth($warrior->getHealth() * $health);
            $warrior->setSpeed($warrior->getSpeed() * $speed);
            $warrior->setWeaponDamage($warrior->getWeapon()->getDamage() * $damage);
        }
        array_splice($this->achievements, $idx, 1);
    }
    /* End Actions */
}