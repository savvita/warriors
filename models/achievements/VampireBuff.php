<?php

namespace models\achievements;
use models\characteristics\AchievementCharacteristics;
require_once 'Achievement.php';
require_once 'models/characteristics/AchievementCharacteristics.php';
class VampireBuff extends Achievement
{
    public function __construct()
    {
        parent::__construct('Vampire Magic');
        $this->addSpeed(AchievementCharacteristics::vampire_speed_value);
        $this->addHealth(AchievementCharacteristics::vampire_health_value);
        $this->setDescription("Vampires are fast (+20%) and almost healthy (-5% of health)");
    }
}