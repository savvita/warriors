<?php

namespace warriors;

use models\accessories\Horse;
use models\armors\LamellarHeavyArmor;
use models\armors\SteelHeavyArmor;
use models\weapons\OneHandedSword;

class Knight extends \models\warriors\PrivateSoldier
{
    public const WARRIOR_NAME = 'Knight';

    public function __construct($fraction)
    {
        parent::__construct($fraction);
        $horse = new Horse();
        $horse->addArmor(new SteelHeavyArmor());

        $this->addHorse($horse);

        $this->addWeapon(new OneHandedSword());
        $this->addArmor(new LamellarHeavyArmor());
    }
}