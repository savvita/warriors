<?php

namespace models\weather;
use models\characteristics\WeatherCharacteristics;

class Ice extends Weather
{
    public function __construct()
    {
        parent::__construct("Ice on the ground", WeatherCharacteristics::ice_speed_value);
        $this->addDescription("Oh, there is ice on the ground. Each one slides +25% faster");
    }
}