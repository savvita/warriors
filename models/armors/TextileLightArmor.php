<?php

namespace models\armors;
use models\characteristics\ArmorCharacteristics;

require_once 'LightArmor.php';
require_once "models/characteristics/ArmorCharacteristics.php";

class TextileLightArmor extends LightArmor
{
    public function __construct() {
        parent::__construct("Textile Armor", ArmorCharacteristics::textile_light_armor_health, ArmorCharacteristics::textile_light_damage_percentage);
    }
}