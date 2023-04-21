<?php

namespace models\weather;
use models\characteristics\WeatherCharacteristics;

class Raining extends Weather
{
    public function __construct()
    {
        parent::__construct("Raining", WeatherCharacteristics::raining_speed_value);
        $this->addDescription("It's raining. All have -10% to speed");
    }
}