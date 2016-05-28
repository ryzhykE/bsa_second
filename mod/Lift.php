<?php

namespace mod;

class Lift {
    private $people = 0;
    private $floor = 1;
    private $maxPeople = 4;
    private $goTo = true;
    
    public function status() {
        echo "People:". $this->people . " Floor:" .$this->floor;
    }
    
    public function additionPeople () {
        echo "How many people in lift?";
        $add = intval(fgets(STDIN));
        if($add > 0) {
            $this->$people += $add;
        } elseif ($this->people > $this->maxPeople) {
              echo "!More than 4 people";          
        }
    }
    
    public function removePeople () {
        echo "How many people out lift?";
        $rem = intval(fgets(STDIN));
        if($this->people - $rem > 0 ){
            $this->people -=$rem;
        }else {
            "can not be 0 or less";
        }            
    }
    
    public function gotoFloor() {
        echo "Which floor?";
        $floor = intval(fgets(STDIN));
        if($floor <1 or $floor > 9) {
           echo "Max floor 9 and min floor 1";
        }else {
            $this->floor = $floor;
        }               
    }
       
}
