<?php

namespace warriors;

use models\accessories\Horse;
use models\armors\SkinLightArmor;
use models\weapons\Peak;

class PeakMan extends \models\warriors\PrivateSoldier
{
    public const WARRIOR_NAME = 'Peakman';
    public function __construct($fraction)
    {
        parent::__construct($fraction);
        $horse = new Horse();
        $horse->addArmor(new SkinLightArmor());

        $this->addHorse($horse);

        $this->addWeapon(new Peak());
        $this->addArmor(new SkinLightArmor());
    }
}