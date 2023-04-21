<?php

namespace warriors;

use models\armors\SkinLightArmor;
use models\weapons\Spear;

class Sportsman extends \models\warriors\PrivateSoldier
{
    public const WARRIOR_NAME = 'Sportsman';

    public function __construct($fraction)
    {
        parent::__construct($fraction);
        $this->addWeapon(new Spear());
        $this->addArmor(new SkinLightArmor());
    }
}