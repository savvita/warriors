<?php

namespace models\achievements;
use models\characteristics\AchievementCharacteristics;
require_once 'Achievement.php';
require_once 'models/characteristics/AchievementCharacteristics.php';
class Inspiration extends Achievement
{
    public function __construct()
    {
        parent::__construct('Inspiration');
        $this->setDescription('All of your warriors get +25% to health');
        $this->addHealth(AchievementCharacteristics::inspiration_health_value);
    }
}