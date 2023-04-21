<?php
include_once 'models/armors/include_armors.php';

const armors = [
    new \models\armors\SkinLightArmor(),
    new \models\armors\TextileLightArmor(),
    new \models\armors\ChainMediumArmor(),
    new \models\armors\LamellarHeavyArmor(),
    new \models\armors\SteelHeavyArmor()
];
function showArmor($armor) : void {
    if($armor === null) {
        return;
    }

    $armor_name = $armor->getName();
    $armor_health = $armor->getHealth();
    $armor_weight = $armor->getWeight();
    $armor_damage_percentage = $armor->getDamagePercentage();

    echo '<div class="card m-2 border border-dark" style="width: 18rem;">';
    echo "<div class='card-header text-white bg-dark'>$armor_name</div>";
    echo '<table class="table mb-0">';
    echo '<tbody>';
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

    echo '</div>';
}
