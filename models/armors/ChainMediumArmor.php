<?php

namespace models\armors;
use models\characteristics\ArmorCharacteristics;

class ChainMediumArmor extends MediumArmor
{
    public function __construct() {
        parent::__construct("Chain Armor", ArmorCharacteristics::chain_medium_armor_health, ArmorCharacteristics::chain_medium_damage_percentage);
    }
}