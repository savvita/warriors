<?php

namespace models\fractions;
include_once 'models/fractions/Fraction.php';
use models\achievements\VedmakBuff;
include_once 'models/achievements/VedmakBuff.php';

class Vedmak extends Fraction
{
    public function __construct()
    {
        $buff = new VedmakBuff();
        parent::__construct("Vedmak", $buff);
    }
}