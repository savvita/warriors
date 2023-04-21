<?php
include_once 'models/accessories/include_accessories.php';

const accessories = [
    new \models\accessories\Horse(),
    new \models\accessories\Shield()
];

function showAccessory($accessory) : void {
    if($accessory === null) {
        return;
    }

    $name = $accessory->getName();

    echo '<div class="card m-2 border border-dark" style="width: 18rem;">';
    echo "<div class='card-header text-white bg-dark'>$name</div>";
    echo '<table class="table mb-0">';
    echo '<tbody>';

    if($accessory instanceof \models\accessories\Shield) {
        echo '<tr>';
        echo "<td>Shield armor</td><td>" . $accessory->getArmor() . "</td>";
        echo '</tr>';
    }

    else if($accessory instanceof \models\accessories\Horse) {
        $horse_health = $accessory->getHealth();
        $horse_speed = $accessory->getSpeed();
        echo '<tr>';
        echo "<td>Health</td><td>$horse_health</td>";
        echo '</tr>';
        echo '<tr>';
        echo "<td>Speed</td><td>$horse_speed</td>";
        echo '</tr>';
        echo '<tr><td colspan="2">Horse can have its own armor</td>';
    }

    echo '</tbody>';
    echo '</table>';

    echo '</div>';
}
