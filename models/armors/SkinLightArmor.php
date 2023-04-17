<?php

namespace models\armors;
use models\characteristics\ArmorCharacteristics;

require_once 'LightArmor.php';
require_once "models/characteristics/ArmorCharacteristics.php";
class SkinLightArmor extends LightArmor
{
    public function __construct() {
        parent::__construct("Skin Armor", ArmorCharacteristics::skin_light_armor_health, ArmorCharacteristics::skin_light_damage_percentage);
    }

}