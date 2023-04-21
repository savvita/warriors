<?php

namespace warriors;

use models\armors\LamellarHeavyArmor;
use models\weapons\TwoHandedSword;

class Aragorn extends \models\warriors\PrivateSoldier
{
    public const WARRIOR_NAME = 'Aragorn';
    public function __construct($fraction)
    {
        parent::__construct($fraction);
        $this->addWeapon(new TwoHandedSword());
        $this->addArmor(new LamellarHeavyArmor());
    }
}