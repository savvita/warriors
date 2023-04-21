<?php

namespace models\warriors;

use models\characteristics\WarriorCharacteristic;
require_once 'Warrior.php';
require_once "models/characteristics/WarriorCharacteristic.php";
class Commander extends Warrior
{
    private string $title;
    private array $achievements = [];
    public function __construct($title, $fraction)
    {
        parent::__construct("Commander", WarriorCharacteristic::warrior_speed, WarriorCharacteristic::warrior_health, $fraction);
        $this->title = $title;
    }

    /* Getters */
    public function getTitle() : string {
        return $this->title;
    }
    public function getAchievements() : array {
        return $this->achievements;
    }
    /* End Getters */

    /* Add-ons */
    public function addAchievement($achievement) : void {
        $this->achievements[] = $achievement;
    }
    /* End Add-ons */

    /* Actions */
    public function useAchievement($squad, $idx = 0) : void {
        if(!$squad || !is_array($squad->getWarriors())) {
            return;
        }

        if($idx < 0 || $idx >= count($this->achievements)) {
            return;
        }

        $warriors = $squad->getWarriors();
        $health = $this->achievements[$idx]->getHealth();
        $damage = $this->achievements[$idx]->getDamage();
        $speed = $this->achievements[$idx]->getSpeed();


        foreach($warriors as $warrior) {
            $warrior->setHealthCoefficient($warrior->getHealthCoefficient() + $health);
            $warrior->setSpeedCoefficient($warrior->getSpeedCoefficient() + $speed);
            $warrior->setDamageCoefficient($warrior->getDamageCoefficient() + $damage);
        }
        array_splice($this->achievements, $idx, 1);
    }
    /* End Actions */
}