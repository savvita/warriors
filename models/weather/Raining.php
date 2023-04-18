<?php

namespace models\weather;
use models\characteristics\WeatherCharacteristics;

require_once 'models/weather/Weather.php';

require_once 'models/characteristics/WeatherCharacteristics.php';
class Raining extends Weather
{
    public function __construct()
    {
        parent::__construct("Raining", WeatherCharacteristics::raining_speed_value);
        $this->addDescription("It's raining. All have -10% to speed");
    }
}