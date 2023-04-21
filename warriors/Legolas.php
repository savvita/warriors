<?php

namespace warriors;

use models\armors\SkinLightArmor;
use models\weapons\Bow;

class Legolas extends \models\warriors\PrivateSoldier
{
    public const WARRIOR_NAME = 'Legolas';
    public function __construct($fraction)
    {
        parent::__construct($fraction);
        $this->addWeapon(new Bow());
        $this->addArmor(new SkinLightArmor());
    }
}