<?php

namespace models\armors;
use models\characteristics\ArmorCharacteristics;

require_once 'HeavyArmor.php';
require_once "models/characteristics/ArmorCharacteristics.php";
class LamellarHeavyArmor extends HeavyArmor
{
    public function __construct() {
        parent::__construct("Lamellar Armor", ArmorCharacteristics::lamellar_heavy_armor_health, ArmorCharacteristics::lamellar_heavy_damage_percentage);
    }
}