<?php

namespace models\fields;

class Field
{
    private $name;
    private $weather = [];
    private $squads = [];

    private $isFinished = false;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /* Getters */
    public function getName() {
        return $this->name;
    }

    public function getSquads(): array {
        return $this->squads;
    }

    public function getWeather(): array {
        return $this->weather;
    }

    public function getWeatherEffect() : float {
        $value = 0;
        foreach($this->weather as $weather) {
            $value += $weather->getValue();
        }

        return $value;
    }

    public function getIsFinished() : bool {
        return $this->isFinished;
    }
    /* End Getters */

    /* Add-ons */
    public function addSquad($squad) {
        if($squad === null || !$squad->getIsCompleted()) {
            return;
        }
        $this->squads[] = $squad;
    }
    public function addWeather($weather) {
        if($weather != null) {
            $current = $this->getWeatherEffect();
            $this->weather[] = $weather;
            print_r($this->weather);
            $this->applyWeatherEffect($current);
        }
    }

    public function removeWeather($idx) {
        if($idx >= 0 && $idx < count($this->weather)) {
            $current = $this->getWeatherEffect();
            array_splice($this->weather, $idx, 1);
            $this->applyWeatherEffect($current);
        }
    }
    /* End Add-ons */

    /* Actions */
    public function start() {
        $this->isFinished = false;
    }
    public function atack() {
        $idx = array_rand($this->squads, 2);
        shuffle($idx);
        $this->squads[$idx[0]]->atack($this->squads[$idx[1]]);

        if(count($this->squads[$idx[0]]->getWarriors()) <= 0) {
            array_splice($this->squads, $idx[0], 1);
            if(count($this->squads) === 1) {
                $this->isFinished = true;
            }
            return;
        }

        $this->squads[$idx[1]]->atack($this->squads[$idx[0]]);
        if(count($this->squads[$idx[1]]->getWarriors()) <= 0) {
            array_splice($this->squads, $idx[1], 1);
        }

        if(count($this->squads) === 1) {
            $this->isFinished = true;
        }
    }
    private function applyWeatherEffect($current) {
        $new = $this->getWeatherEffect();
        $coeff = $new - $current;
        foreach($this->squads as $squad) {
            $warriors = $squad->getWarriors();
            foreach($warriors as $warrior) {
                $warrior->setSpeedCoefficient($warrior->getSpeedCoefficient() + $coeff);
            }
        }
    }
    /* End Actions */
}