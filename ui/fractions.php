<?php
include_once 'models/fractions/include_fractions.php';

const fractions = [
    new models\fractions\GordonFreeman(),
    new models\fractions\Zombie(),
    new models\fractions\Vampire(),
    new models\fractions\Vedmak()
];

function showFraction($fraction) : void {
    if($fraction === null) {
        return;
    }

    $name = $fraction->getName();
    $buff = $fraction->getBuff();

    echo '<div class="card m-2 border border-dark" style="width: 18rem;">';
    echo "<div class='card-header text-white bg-dark'>$name</div>";

    if($buff !== null) {
        echo "<div class='card-text p-2'>" . $buff->getDescription() . "</div>";
    }

    echo '</div>';
}

