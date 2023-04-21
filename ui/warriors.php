<?php
include_once 'warriors/include_warriors.php';
//include_once 'models/fractions/include_fractions.php';

const warriors = [
    new warriors\Aragorn(null),
    new warriors\Bedouin(null),
    new warriors\Centaur(null),
    new warriors\Dwarf(null),
    new warriors\HalberdMan(null),
    new warriors\Knight(null),
    new warriors\Kozak(null),
    new warriors\Legolas(null),
    new warriors\PeakMan(null),
    new warriors\Sportsman(null),
    new warriors\Valera(null),
    new warriors\ValeraLight(null)
];

function showWarrior($warrior) : void {
    if($warrior === null) {
        return;
    }

    echo '<div class="card m-2 border border-dark" style="width: 18rem;">';

    showMainSection($warrior);

    $weapon = $warrior->getWeapon();
    if($weapon !== null) {
        showWeaponSection($weapon);
    }

    $armor = $warrior->getArmor();
    if($armor !== null) {
        showArmorSection($armor);
    }

    $horse = $warrior->getHorse();
    if($horse !== null) {
       showHorseSection($horse);
    }

    $shield = $warrior->getShield();
    if($shield !== null) {
        showShieldSection($shield);
    }

    echo '</div>';
}

function showMainSection($warrior) : void {
    $name = $warrior::WARRIOR_NAME;
    $class = $warrior->getName();
    $health = $warrior->getHealth();
    $speed = $warrior->getSpeed();

    echo "<div class='card-header text-white bg-dark'>$name</div>";

    echo '<table class="table mb-0">';
    echo '<tbody>';
    echo '<tr>';
    echo "<td>Class</td><td>$class</td>";
    echo '</tr>';
    echo '<tr>';
    echo "<td>Total health</td><td>$health</td>";
    echo '</tr>';
    echo '<tr>';
    echo "<td>Speed</td><td>$speed</td>";
    echo '</tr>';
    echo '</tbody>';
    echo '</table>';
}
function showWeaponSection($weapon) : void {
    $weapon_name = $weapon->getName();
    $weapon_damage = $weapon->getDamage();

    echo "<div class='card-header text-white bg-secondary'>Weapon</div>";
    echo '<table class="table mb-0">';
    echo '<tbody>';
    echo '<tr>';
    echo "<td>Name</td><td>$weapon_name</td>";
    echo '</tr>';
    echo '<tr>';
    echo "<td>Damage</td><td>$weapon_damage</td>";
    echo '</tr>';
    echo '</tbody>';
    echo '</table>';
}

function showArmorSection($armor) : void {
    $armor_name = $armor->getName();
    $armor_health = $armor->getHealth();
    $armor_weight = $armor->getWeight();
    $armor_damage_percentage = $armor->getDamagePercentage();

    echo "<div class='card-header text-white bg-secondary'>Armor</div>";
    echo '<table class="table mb-0">';
    echo '<tbody>';
    echo '<tr>';
    echo "<td>Name</td><td>$armor_name</td>";
    echo '</tr>';
    echo '<tr>';
    echo "<td>Health</td><td>$armor_health</td>";
    echo '</tr>';
    echo '<tr>';
    echo "<td>Weight</td><td>$armor_weight</td>";
    echo '</tr>';
    echo '<tr>';
    echo "<td>Damage percentage</td><td>$armor_damage_percentage</td>";
    echo '</tr>';
    echo '</tbody>';
    echo '</table>';
}

function showHorseSection($horse) : void {
    $horse_name = $horse->getName();
    $horse_health = $horse->getHealth();
    $horse_speed = $horse->getSpeed();

    echo "<div class='card-header text-white bg-secondary'>Horse</div>";
    echo '<table class="table mb-0">';
    echo '<tbody>';
    echo '<tr>';
    echo "<td>Name</td><td>$horse_name</td>";
    echo '</tr>';
    echo '<tr>';
    echo "<td>Health</td><td>$horse_health</td>";
    echo '</tr>';
    echo '<tr>';
    echo "<td>Speed</td><td>$horse_speed</td>";
    echo '</tr>';

    $horse_armor = $horse->getArmor();
    if($horse_armor !== null) {
        echo '<tr>';
        echo '<td>Armor</td>';
        echo '<td>' . $horse_armor->getName() . '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>Armor health</td>';
        echo '<td>' . $horse_armor->getHealth() . '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
}

function showShieldSection($shield) : void {
    $shield_name = $shield->getName();
    $shield_armor = $shield->getArmor();

    echo "<div class='card-header text-white bg-secondary'>Shield</div>";
    echo '<table class="table mb-0">';
    echo '<tbody>';
    echo '<tr>';
    echo "<td>Name</td><td>$shield_name</td>";
    echo '</tr>';
    echo '<tr>';
    echo "<td>Shield armor</td><td>$shield_armor</td>";
    echo '</tr>';

    echo '</tbody>';
    echo '</table>';
}