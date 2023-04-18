<?php

namespace models\achievements;
require_once 'Achievement.php';

class Fury extends Achievement
{
    public function __construct()
    {
        parent::__construct('Fury', 'damage', 0.10);
        $this->setDescription('All of your warriors get +10% to damage');
        $this->addDamage(0.1);
    }
}