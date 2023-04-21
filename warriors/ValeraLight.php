<?php

namespace warriors;

use models\armors\TextileLightArmor;
use models\weapons\OneHandedSword;

class ValeraLight extends \models\warriors\PrivateSoldier
{
    public const WARRIOR_NAME = 'Valera Light';
    public function __construct($fraction)
    {
        parent::__construct($fraction);
        $this->addWeapon(new OneHandedSword());
        $this->addArmor(new TextileLightArmor());
    }
}