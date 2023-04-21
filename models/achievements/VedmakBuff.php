<?php

namespace models\achievements;
use models\characteristics\AchievementCharacteristics;
require_once 'models/achievements/Achievement.php';
class VedmakBuff extends Achievement
{
    public function __construct()
    {
        parent::__construct('School of White Wolf');
        $this->addSpeed(AchievementCharacteristics::vedmak_speed_value);
        $this->addDamage(AchievementCharacteristics::vedmak_damage_value);
        $this->setDescription("Vedmak is a little slowly (-10%) and strong (+10% of damage)");
    }
}