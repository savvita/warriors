<?php

namespace models\squad;
use models\characteristics\SquadCharacteristics;

require_once "models/characteristics/SquadCharacteristics.php";
class Squad
{
    private $name;
    private $commander;
    private $warriors = [];

    public function __construct($name, $commander)
    {
        $this->name = $name;
        $this->commander = $commander;
        $this->warriors[] = $commander;
    }

    /* Getters */
    public function getName() : string {
        return $this->name;
    }

    public function getCommander(){
        return $this->commander;
    }
    public function getWarriors(): array {
        return $this->warriors;
    }
    public function getIsCompleted() : bool {
        $count = count($this->warriors);
        return $count >= SquadCharacteristics::min_squad_count && $count <= SquadCharacteristics::max_squad_count;
    }
    /* End Getters */

    public function addWarrior($warrior) {
        if(count($this->warriors) >= SquadCharacteristics::max_squad_count) {
            return;
        }

        $this->warriors[] = $warrior;
    }

    public function removeWarrior($idx) {
        if($idx < 0 || $idx >= count($this->warriors)) {
            return;
        }

        array_splice($this->warriors, $idx, 1);
    }
}