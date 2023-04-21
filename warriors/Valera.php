<?php

namespace warriors;

use models\armors\SkinLightArmor;
use models\weapons\OneHandedSword;

class Valera extends \models\warriors\PrivateSoldier
{
    public const WARRIOR_NAME = 'Valera';

    public function __construct($fraction)
    {
        parent::__construct($fraction);
        $this->addWeapon(new OneHandedSword());
        $this->addArmor(new SkinLightArmor());
    }
}