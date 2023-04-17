<?php

namespace models\armors;
use models\characteristics\ArmorCharacteristics;

require_once 'MediumArmor.php';
require_once "models/characteristics/ArmorCharacteristics.php";

class ChainMediumArmor extends MediumArmor
{
    public function __construct() {
        parent::__construct("Chain Armor", ArmorCharacteristics::chain_medium_armor_health, ArmorCharacteristics::chain_medium_damage_percentage);
    }
}