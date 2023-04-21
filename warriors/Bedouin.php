<?php

namespace warriors;

use models\armors\ChainMediumArmor;
use models\weapons\Saber;


class Bedouin extends \models\warriors\PrivateSoldier
{
    public const WARRIOR_NAME = 'Bedouin';

    public function __construct($fraction)
    {
        parent::__construct($fraction);
        $this->addWeapon(new Saber());
        $this->addArmor(new ChainMediumArmor());
    }
}