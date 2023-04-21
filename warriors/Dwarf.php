<?php

namespace warriors;

use models\armors\ChainMediumArmor;
use models\weapons\Axe;

class Dwarf extends \models\warriors\PrivateSoldier
{
    public const WARRIOR_NAME = 'Dwarf';
    public function __construct($fraction)
    {
        parent::__construct($fraction);
        $this->addWeapon(new Axe());
        $this->addArmor(new ChainMediumArmor());
    }
}