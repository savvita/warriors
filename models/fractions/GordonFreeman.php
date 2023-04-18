<?php

namespace models\fractions;

use models\achievements\GordonFreemanBuff;
include_once 'models/achievements/GordonFreemanBuff.php';
include_once 'models/fractions/Fraction.php';
class GordonFreeman extends Fraction
{
    public function __construct()
    {
        $buff = new GordonFreemanBuff();
        parent::__construct("Gordon Freeman", $buff);
    }
}