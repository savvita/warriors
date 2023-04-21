<?php

namespace models\fractions;
use models\achievements\VedmakBuff;

require_once 'models/achievements/VedmakBuff.php';

class Vedmak extends Fraction
{
    public function __construct()
    {
        parent::__construct("Vedmak", new VedmakBuff());
    }
}