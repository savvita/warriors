<?php
include_once 'models/weather/include_weather.php';

const weather = [
    new \models\weather\Ice(),
    new \models\weather\Raining()
];

function showWeather($weather) : void {
    if($weather === null) {
        return;
    }

    $name = $weather->getName();
    $description = $weather->getDescription();

    echo '<div class="card m-2 border border-dark" style="width: 18rem;">';
    echo "<div class='card-header text-white bg-dark'>$name</div>";
    echo "<div class='card-text p-2'>$description</div>";
    echo '</div>';
}
