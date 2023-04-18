<?php

namespace models\achievements;

use models\characteristics\AchievementCharacteristics;
include_once 'models/achievements/Achievement.php';
class GordonFreemanBuff extends Achievement
{
    public function __construct()
    {
        parent::__construct('Gordon Freeman forever!');
        $this->addSpeed(AchievementCharacteristics::gordan_freeman_speed_value);
        $this->addHealth(AchievementCharacteristics::gordan_freeman_health_value);
        $this->addDamage(AchievementCharacteristics::gordan_freeman_damage_value);
        $this->setDescription("Gordon Freeman is strong (+30% of damage), fast (+30% of speed) and healthy (+30% of health)");
    }
}