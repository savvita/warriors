<?php

namespace models\armors;
use models\characteristics\ArmorCharacteristics;

require_once  'models/characteristics/ArmorCharacteristics.php';

require_once "Armor.php";

abstract class MediumArmor extends Armor
{
    public function __construct($name, $health, $damage_percentage) {
        parent::__construct($name, $health, ArmorCharacteristics::medium_armor_weight, $damage_percentage);
    }
}