<?php

namespace models\squad;
use models\characteristics\SquadCharacteristics;

require_once "models/characteristics/SquadCharacteristics.php";
class Squad
{
    private $name;
    private $warriors = [];
    private $commander;

    public function __construct($name, $commander)
    {
        $this->name = $name;
        $this->commander = $commander;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getCommander()
    {
        return $this->commander;
    }

    public function getIsCompleted() : bool
    {
        $count = count($this->warriors);
        return $count >= SquadCharacteristics::min_squad_count && $count <= SquadCharacteristics::max_squad_count;
    }

    public function addWarrior($warrior) {
        if(count($this->warriors) >= SquadCharacteristics::max_squad_count) {
            return;
        }

        $this->warriors[] = $warrior;
    }

    public function removeWarrior($warrior) {
        $this->warriors = array_filter($this->warriors, function($w) {
            global $warrior;
            return $w != $warrior;
        });
    }
}