<?php

namespace models\armors;
use models\characteristics\ArmorCharacteristics;

class SteelHeavyArmor extends HeavyArmor
{
    public function __construct() {
        parent::__construct("Steel Armor", ArmorCharacteristics::steel_heavy_armor_health, ArmorCharacteristics::steel_heavy_damage_percentage);
    }
}