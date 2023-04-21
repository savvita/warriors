<?php

namespace models\squad;
use models\characteristics\SquadCharacteristics;

require_once "models/characteristics/SquadCharacteristics.php";
class Squad
{
    private string $name;
    private $commander;
    private array $warriors = [];

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

    /* Add-onds */
    public function addWarrior($warrior) : void {
        if($warrior === null) {
            return;
        }

        if(count($this->warriors) >= SquadCharacteristics::max_squad_count) {
            return;
        }

        $this->warriors[] = $warrior;
    }

    public function removeWarrior($idx) : void {
        if($idx < 0 || $idx >= count($this->warriors)) {
            return;
        }

        array_splice($this->warriors, $idx, 1);
    }
    /* End Add-ons */

    /* Actions */
    public function atack($squad) : void {
        if(!$this->getIsCompleted()) {
            return;
        }

        if($squad === null) {
            return;
        }

        foreach($this->warriors as $warrior) {
            $enemies = $squad->getWarriors();
            if(count($enemies) > 0) {
                $idx = rand(0, count($enemies) - 1);
                $warrior->atack($enemies[$idx]);
            }
        }
        $squad->checkAlives();
    }

    public function checkAlives() : void {
        $idx = [];
        $count = count($this->warriors);
        for($i = 0; $i < $count; $i++) {
            if($this->warriors[$i]->getHealth() <= 0) {
                $idx[] = $i;
            }
        }

        for($i = count($idx); $i >= 0; $i--) {
            array_splice($this->warriors, $i, 1);
        }
    }
    /* End Actions */
}