<?php
include_once 'models/achievements/include_achievements.php';

const achievements = [
    new \models\achievements\Fury(),
    new \models\achievements\Inspiration()
];

function showAchievement($achievement) : void {
    if($achievement === null) {
        return;
    }

    $name = $achievement->getName();
    $description = $achievement->getDescription();

    echo '<div class="card m-2 border border-dark" style="width: 18rem;">';
    echo "<div class='card-header text-white bg-dark'>$name</div>";
    echo "<div class='card-text p-2'>$description</div>";
    echo '</div>';
}
