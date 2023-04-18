<?php

namespace models\achievements;
use models\characteristics\AchievementCharacteristics;
require_once 'Achievement.php';
require_once 'models/characteristics/AchievementCharacteristics.php';

class ZombieBuff extends Achievement
{
    public function __construct()
    {
        parent::__construct('Zombie Power');
        $this->addSpeed(AchievementCharacteristics::zombie_speed_value);
        $this->addHealth(AchievementCharacteristics::zombie_health_value);
        $this->setDescription("All zombies are very slowly (-50% of speed) and health (+30% of health)");
    }
}