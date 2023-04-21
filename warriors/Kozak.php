<?php

namespace warriors;

use models\accessories\Shield;
use models\armors\ChainMediumArmor;
use models\weapons\Morgenstern;

class Kozak extends \models\warriors\PrivateSoldier
{
    public const WARRIOR_NAME = 'Kozak';
    public function __construct($fraction)
    {
        parent::__construct($fraction);
        $this->addWeapon(new Morgenstern());
        $this->addArmor(new ChainMediumArmor());
        $this->addShield(new Shield());
    }
}