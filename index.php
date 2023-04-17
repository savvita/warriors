<?php

include_once 'models/armors/include_armors.php';
include_once 'models/weapons/include_weapons.php';
include_once 'models/accessories/include_accessories.php';
include_once 'models/warriors/include_warriors.php';

$armors = [
    "Light" => [
        new models\armors\SkinLightArmor(),
        new models\armors\TextileLightArmor()
    ],
    "Medium" => [
        new models\armors\ChainMediumArmor()
    ],
    "Heavy" => [
        new models\armors\SteelHeavyArmor(),
        new models\armors\LamellarHeavyArmor()
    ]
];

$weapons = [
    new models\weapons\Axe(),
    new models\weapons\Halberd(),
    new models\weapons\Morgenstern(),
    new models\weapons\OneHandedSword(),
    new models\weapons\Saber(),
    new models\weapons\Spear(),
    new models\weapons\TwoHandedSword(),
    new models\weapons\Peak(),
    new models\weapons\Bow()
];

$accessories = [
    new models\accessories\Horse(),
    new models\accessories\Shield()
];

$warriors = [
    "Horseman" => [
        new models\warriors\Horseman()
    ],
    "Walking" => [
        new models\warriors\Walking()
    ]
];

echo '<h2>Armors</h2>';
echo '<ul>';

foreach ($armors as $type=>$values) {
    echo "<li>$type</li>";

    if(count($values) > 0) {
        echo '<ul>';
        foreach($values as $armor) {
            $name = $armor->getName();
            $health = $armor->getHealth();
            $weight = $armor->getWeight();
            $damage_percentage = $armor->getDamagePercentage();
            echo "<li>$name, health: $health, weight: $weight</li>, damage percentage: $damage_percentage";
        }
        echo '</ul>';
    }
}

echo '</ul>';

echo '<h2>Weapons</h2>';
echo '<ul>';

foreach ($weapons as $weapon) {
    $name = $weapon->getName();
    $damage = $weapon->getDamage();
    $atack_distance = $weapon->getAtackDistance();
    $arrows = $weapon instanceof models\weapons\Bow ? $weapon->getArrows() : null;
    $str = $arrows != null ? ", arrows: $arrows" : '';
    echo "<li>$name, damage: $damage, atack distance: {$atack_distance}{$str}</li>";
}

echo '</ul>';

echo '<h2>Accessories</h2>';
echo '<ul>';

foreach ($accessories as $accessory) {
    $str = $accessory->getName();
    if($accessory instanceof models\accessories\Horse) {
        $health = $accessory->getHealth();
        $speed = $accessory->getSpeed();
        $str .= ", health: $health, speed: $speed";
    }
    else if($accessory instanceof models\accessories\Shield) {
        $armor = $accessory->getArmor();
        $str .= ", armor: $armor";
    }
    echo "<li>$str</li>";
}

echo '</ul>';

echo '<h2>Warriors</h2>';
echo '<ul>';

foreach ($warriors as $type=>$values) {
    echo "<li>$type</li>";

    if(count($values) > 0) {
        echo '<ul>';
        foreach($values as $warrior) {
            $name = $warrior->getName();
            $health = $warrior->getHealth();
            $speed = $warrior->getSpeed();
            echo "<li>$name, health: $health, speed: $speed</li>";
        }
        echo '</ul>';
    }
}
echo '</ul>';

echo '<hr />';

$warr2 = new models\warriors\Walking();
$warr2->addWeapon(new models\weapons\Peak());

$warr1 = new models\warriors\Horseman();
$warr1->addWeapon(new models\weapons\Axe());
$warr1->addShield(new models\accessories\Shield());
$warr1->addArmor(new models\armors\LamellarHeavyArmor());

$name = $warr1->getName();
$health = $warr1->getHealth();
$speed = $warr1->getSpeed();
//echo '<pre>';
//var_dump($warr1);

$horse_health = $warr1->getHorse()->getHealth();
$horse_speed = $warr1->getHorse()->getSpeed();

$armor_health = $warr1->getArmor()->getHealth();

echo "$name<br />";
echo "Health: $health<br />";
echo "Speed: $speed<br />";
echo "Horse health: $horse_health<br />";
echo "Horse speed: $horse_speed<br />";
echo "Armor health: $armor_health<br />";

echo '<hr />';

$warr2->atack($warr1);
$name = $warr1->getName();
$health = $warr1->getHealth();
$speed = $warr1->getSpeed();
//echo '<pre>';
//var_dump($warr1);

$horse_health = $warr1->getHorse()->getHealth();
$horse_speed = $warr1->getHorse()->getSpeed();

$armor_health = $warr1->getArmor()->getHealth();

echo "$name<br />";
echo "Health: $health<br />";
echo "Speed: $speed<br />";
echo "Horse health: $horse_health<br />";
echo "Horse speed: $horse_speed<br />";
echo "Armor health: $armor_health<br />";





