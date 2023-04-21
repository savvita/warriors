<?php
include_once 'models/weapons/include_weapons.php';

const weapons = [
    new \models\weapons\Axe(),
    new \models\weapons\Bow(),
    new \models\weapons\Halberd(),
    new \models\weapons\Morgenstern(),
    new \models\weapons\OneHandedSword(),
    new \models\weapons\Peak(),
    new \models\weapons\Saber(),
    new \models\weapons\Spear(),
    new \models\weapons\TwoHandedSword()
];

function showWeapon($weapon) : void {
    if($weapon === null) {
        return;
    }


    $weapon_name = $weapon->getName();
    $weapon_damage = $weapon->getDamage();

    echo '<div class="card m-2 border border-dark" style="width: 18rem;">';


    echo "<div class='card-header text-white bg-dark'>$weapon_name</div>";
    echo '<table class="table mb-0">';
    echo '<tbody>';
    echo '<tr>';
    echo "<td>Damage</td><td>$weapon_damage</td>";
    echo '</tr>';

    if($weapon instanceof \models\weapons\Bow) {
        echo '<tr>';
        echo '<td>Arrows</td>';
        echo '<td>' . $weapon->getArrows() . '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';

    echo '</div>';
}

