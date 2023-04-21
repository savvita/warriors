<?php

require_once 'ui/accessoires.php';
require_once 'ui/achievements.php';
require_once 'ui/armors.php';
require_once 'ui/fractions.php';
require_once 'ui/warriors.php';
require_once 'ui/weather.php';
require_once 'ui/weapons.php';
require_once 'models/characteristics/SquadCharacteristics.php';
require_once 'models/warriors/Commander.php';
require_once 'models/squad/Squad.php';
require_once 'models/fields/Field.php';

function battle() {
    $field = getRandomField();
    $ww = array_map(function($x) { return $x->getName(); }, $field->getWeather());
    $weather = count($ww) > 0 ? implode(', ', $ww) : 'none';

    echo '<h2>Weather: ' . $weather . '</h2>';

    echo '<div class="accordion" id="accordion">';
    $field->start();
    $i = 0;
    while($field->getIsFinished() !== true) {
        echoRound($field->getSquads(), $i);
        $field->atack();
        $i++;
    }
    echo '</div>';

    $winner = (count($field->getSquads()[0]->getWarriors()) > 0) ? $field->getSquads()[0]->getName() : $field->getSquads()[1]->getName();

    echo "<h2 class='m-4'>$winner won</h2>";
}
function echoRound($squads, $round) {
    echo '<div class="accordion-item">';
    echo "<h2 class='accordion-header' id='round$round'>";
    echo "<button class='accordion-button' type='button' data-bs-toggle='collapse' data-bs-target='#collapse$round' aria-expanded='true' aria-controls='collapse$round'>Round $round</button>";
    echo '</h2>';
    echo "<div id='collapse$round' class='accordion-collapse collapse' aria-labelledby='heading$round' data-bs-parent='#accordion'>";
    echo '<div class="accordion-body d-flex justify-content-stretch align-items-start">';
    foreach ($squads as $squad) {
        echoSquad($squad);
    }

    echo '</div>';
    echo '</div>';
    echo '</div>';
}

function echoSquad($squad) {
    if($squad === null) {
        return;
    }
    $name = $squad->getName();
    $warriors = $squad->getWarriors();

    echo '<div class="card">';
    echo '<div class="card-body">';
    echo "<h5 class='card-title'>$name</h5>";
    echo '</div>';
    echo '<ul class="list-group list-group-flush">';

    foreach ($warriors as $warrior) {
        $warrior_name = "";
        if($warrior instanceof \models\warriors\Commander) {
            $warrior_name = $warrior->getTitle();
        }
        else {
            $warrior_name = $warrior::WARRIOR_NAME;
        }

        $fraction = $warrior->getFraction() !== null ? $warrior->getFraction()->getName() : 'none';
        $speed = $warrior->getSpeed();
        $health = $warrior->getHealth();
        $armor_health = $warrior->getArmor() !== null ? $warrior->getArmor()->getHealth() : 'none';
        $horse_health = $warrior->getHorse() !== null ? $warrior->getHorse()->getHealth() : 'none';

        echo "<li class='list-group-item'>$warrior_name (fraction: $fraction). Health: $health. Armor health: $armor_health. Speed: $speed. Horse health: $horse_health</li>";
    }

    echo '</ul>';
    echo '</div>';
}

function getRandomField() {
    $squads = [getRandomSquad('Fighting squirrels'), getRandomSquad('Little Ponies')];

    $field = new \models\fields\Field("Random game");
    foreach($squads as $squad) {
        $field->addSquad($squad);
    }

    if(rand(0, 100) < 33) {
        $field->addWeather(new \models\weather\Ice());
    }

    if(rand(0, 100) < 33) {
        $field->addWeather(new \models\weather\Raining());
    }

    return $field;
}
function getRandomSquad($name) {
    $title = "Commander of squad " . $name;
    $commander = getRandomCommander($title);

    $squad = new \models\squad\Squad($name, $commander);

    $count = rand(\models\characteristics\SquadCharacteristics::min_squad_count, \models\characteristics\SquadCharacteristics::max_squad_count);

    for($i = 0; $i < $count; $i++) {
        $squad->addWarrior(getRandomWarrior());
    }

    return $squad;
}

function getRandomCommander($name) {
    $commander = new \models\warriors\Commander($name, getRandomFraction());
    $commander->addWeapon(getRandomWeapon());
    $commander->addArmor(getRandomArmor());
    if(rand(0, 100) < 50) {
        $commander->addHorse(new \models\accessories\Horse());
    }

    if(rand(0, 100) < 50) {
        $commander->addShield(new \models\accessories\Shield());
    }

    if(rand(0, 100) < 80) {
        $commander->addAchievement(getRandomAchievement());
    }

    return $commander;
}

function getRandomWarrior() {
    $idx = rand(0, count(warriors) - 1);
    switch($idx) {
        case 0:
            return new warriors\Aragorn(getRandomFraction());
        case 1:
            return new warriors\Bedouin(getRandomFraction());
        case 2:
            return new warriors\Centaur(getRandomFraction());
        case 3:
            return new warriors\Dwarf(getRandomFraction());
        case 4:
            return new warriors\HalberdMan(getRandomFraction());
        case 5:
            return new warriors\Knight(getRandomFraction());
        case 6:
            return new warriors\Kozak(getRandomFraction());
        case 7:
            return new warriors\Legolas(getRandomFraction());
        case 8:
            return new warriors\PeakMan(getRandomFraction());
        case 9:
            return new warriors\Sportsman(getRandomFraction());
        case 10:
            return new warriors\Valera(getRandomFraction());
        case 11:
            return new warriors\ValeraLight(getRandomFraction());
    }
}
function getRandomFraction() {
    $idx = rand(0, count(fractions) - 1);
    switch($idx) {
        case 0:
            return new \models\fractions\Zombie();
        case 1:
            return new \models\fractions\Vedmak();
        case 2:
            return new \models\fractions\Vampire();
        case 3:
            return new \models\fractions\GordonFreeman();
    }
}

function getRandomArmor() {
    $idx = rand(0, count(armors) - 1);
    switch($idx) {
        case 0:
            return new \models\armors\SkinLightArmor();
        case 1:
            return new \models\armors\TextileLightArmor();
        case 2:
            return new \models\armors\ChainMediumArmor();
        case 3:
            return new \models\armors\LamellarHeavyArmor();
        case 4:
            return new \models\armors\SteelHeavyArmor();
    }
}

function getRandomWeapon() {
    $idx = rand(0, count(weapons) - 1);
    switch($idx) {
        case 0:
            return new \models\weapons\Axe();
        case 1:
            return new \models\weapons\Bow();
        case 2:
            return new \models\weapons\Halberd();
        case 3:
            return new \models\weapons\Morgenstern();
        case 4:
            return new \models\weapons\OneHandedSword();
        case 5:
            return new \models\weapons\Peak();
        case 6:
            return new \models\weapons\Saber();
        case 7:
            return new \models\weapons\Spear();
        case 8:
            return new \models\weapons\TwoHandedSword();
    }
}

function getRandomAchievement() {
    $idx = rand(0, count(achievements) - 1);
    switch($idx) {
        case 0:
            return new \models\achievements\Fury();
        case 1:
            return new \models\achievements\Inspiration();
    }
}