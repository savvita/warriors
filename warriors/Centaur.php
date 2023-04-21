<?php

namespace warriors;

use models\accessories\Horse;
use models\armors\SkinLightArmor;
use models\weapons\Bow;

class Centaur extends \models\warriors\PrivateSoldier
{
    public const WARRIOR_NAME = 'Kentaur';
    public function __construct($fraction)
    {
        parent::__construct($fraction);
        $this->addHorse(new Horse());
        $this->addWeapon(new Bow());
        $this->addArmor(new SkinLightArmor());
    }
}