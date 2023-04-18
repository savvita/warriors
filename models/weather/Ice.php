<?php

namespace models\weather;
use models\characteristics\WeatherCharacteristics;

require_once 'models/weather/Weather.php';

require_once 'models/characteristics/WeatherCharacteristics.php';
class Ice extends Weather
{
    public function __construct()
    {
        parent::__construct("Raining", WeatherCharacteristics::raining_speed_value);
        $this->addDescription("Oh, there is ice on the ground. Each one slides +10% faster");
    }
}