<?php

namespace models\fractions;

abstract class Fraction
{
    private string $name;
    private $buff;

    protected function __construct($name, $buff)
    {
        $this->name = $name;
        $this->buff = $buff;
    }

    /* Getters */
    public function getName() : string {
        return $this->name;
    }

    public function getBuff() {
        return $this->buff;
    }
    /* End Getters */

}