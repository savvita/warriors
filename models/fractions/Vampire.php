<?php

namespace models\fractions;

use models\achievements\VampireBuff;
require_once 'models/achievements/VampireBuff.php';

class Vampire extends Fraction
{
    public function __construct()
    {
        parent::__construct("Vampire", new VampireBuff());
    }
}