<?php

namespace models\armors;

use models\characteristics\ArmorCharacteristics;

abstract class LightArmor extends Armor
{
    public function __construct($name, $health, $damage_percentage) {
        parent::__construct($name, $health, ArmorCharacteristics::light_armor_weight, $damage_percentage);
    }
}