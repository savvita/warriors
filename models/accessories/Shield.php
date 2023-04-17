<?php

namespace models\accessories;
use models\characteristics\AccessoryCharacteristics;
require_once "models/characteristics/AccessoryCharacteristics.php";
class Shield
{
    private $name;
    private $armor;

    public function __construct()
    {
        $this->name = "Shield";
        $this->armor = AccessoryCharacteristics::shield_armor;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function getArmor(): int
    {
        return $this->armor;
    }
}