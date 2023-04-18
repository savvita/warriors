<?php

namespace models\fractions;

use models\achievements\ZombieBuff;
include_once 'models/achievements/ZombieBuff.php';
include_once 'models/fractions/Fraction.php';
class Zombie extends Fraction
{
    public function __construct()
    {
        $buff = new ZombieBuff();
        parent::__construct("Zombie", $buff);
    }
}