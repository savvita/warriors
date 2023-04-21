<?php

namespace models\accessories;
use models\characteristics\AccessoryCharacteristics;

class Shield
{
    private string $name;
    private $armor;

    public function __construct()
    {
        $this->name = "Shield";
        $this->armor = AccessoryCharacteristics::shield_armor;
    }

    /* Getter */
    public function getName(): string {
        return $this->name;
    }
    public function getArmor() {
        return $this->armor;
    }
    /* End Getters */
}