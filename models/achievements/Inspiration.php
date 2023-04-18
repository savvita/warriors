<?php

namespace models\achievements;

require_once 'Achievement.php';
class Inspiration extends Achievement
{
    public function __construct()
    {
        parent::__construct('Inspiration');
        $this->setDescription('All of your warriors get +25% to health');
        $this->addHealth(0.25);
    }
}