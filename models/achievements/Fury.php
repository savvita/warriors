<?php

namespace models\achievements;
use models\characteristics\AchievementCharacteristics;
require_once 'models/achievements/Achievement.php';
class Fury extends Achievement
{
    public function __construct()
    {
        parent::__construct('Fury', 'damage', 0.10);
        $this->setDescription('All of your warriors get +10% to damage');
        $this->addDamage(AchievementCharacteristics::fury_damage_value);
    }
}