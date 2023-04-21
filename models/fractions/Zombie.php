<?php

namespace models\fractions;

use models\achievements\ZombieBuff;
require_once 'models/achievements/ZombieBuff.php';

class Zombie extends Fraction
{
    public function __construct()
    {
        parent::__construct("Zombie", new ZombieBuff());
    }
}