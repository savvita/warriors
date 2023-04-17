<?php

namespace models\characteristics;

class ArmorCharacteristics
{
    public const light_armor_weight = 0.05;
    public const medium_armor_weight = 0.1;
    public const heavy_armor_weight = 0.25;

    public const textile_light_armor_health = 5;
    public const skin_light_armor_health = 10;
    public const chain_medium_armor_health = 20;
    public const steel_heavy_armor_health = 25;
    public const lamellar_heavy_armor_health = 35;


    public const textile_light_damage_percentage = 0.9;
    public const skin_light_damage_percentage = 0.8;
    public const chain_medium_damage_percentage = 0.6;
    public const steel_heavy_damage_percentage = 0.5;
    public const lamellar_heavy_damage_percentage = 0.1;
}