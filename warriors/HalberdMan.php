<?php

namespace warriors;

use models\armors\ChainMediumArmor;
use models\weapons\Halberd;

class HalberdMan extends \models\warriors\PrivateSoldier
{
    public const WARRIOR_NAME = 'Halberdman';

    public function __construct($fraction)
    {
        parent::__construct($fraction);
        $this->addWeapon(new Halberd());
        $this->addArmor(new ChainMediumArmor());
    }
}