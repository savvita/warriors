<?php

namespace models\achievements;
use models\characteristics\AchievementCharacteristics;
require_once 'models/achievements/Achievement.php';
class Inspiration extends Achievement
{
    public function __construct()
    {
        parent::__construct('Inspiration');
        $this->setDescription('All of your warriors get +25% to health');
        $this->addHealth(AchievementCharacteristics::inspiration_health_value);
    }
}