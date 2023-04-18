<?php

namespace models\fractions;

use models\achievements\VampireBuff;
include_once 'models/achievements/VampireBuff.php';
include_once 'models/fractions/Fraction.php';
class Vampire extends Fraction
{
    public function __construct()
    {
        $buff = new VampireBuff();
        parent::__construct("Vampire", $buff);
    }
}