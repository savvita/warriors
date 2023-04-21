<?php

namespace models\fractions;

use models\achievements\GordonFreemanBuff;
require_once 'models/achievements/GordonFreemanBuff.php';

class GordonFreeman extends Fraction
{
    public function __construct()
    {
        parent::__construct("Gordon Freeman", new GordonFreemanBuff());
    }
}