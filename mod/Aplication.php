<?php
class Aplication {
    
    private $finish = false;
    private $lift;
    
    public function menyLift() {
        echo 'The lift is ready' . PHP_EOL;
        echo 'status() The current status ' . PHP_EOL;
        echo 'additionPeople() Addition people in the lift' . PHP_EOL;
        echo 'removePeople() Remove people from lift' . PHP_EOL;
        echo 'gotoFloor() Send lift to the floor' . PHP_EOL;
        echo 'finish() Finish script'. PHP_EOL;    
    }
     
    public function command () {
        echo "Enter command menyLift()" . PHP_EOL;
        $com = fgets(STDIN);
    }
    
    public function start() {
        $this->lift = new Lift();
        
          while($com != 0){
            
            switch ($com){
                case ready: 
                    $lift->status();
                    break;
                case addition: 
                    $lift->additionPeople ();
                    break;
                case removePeople: 
                    $lift->removePeople ();
                    break;
                case gotoFloor: 
                    $lift->gotoFloor();
                    break;
                case finish : 
                    $this->end_script = true;
                    break;
                default:
                    echo "Try again" . PHP_EOL;
            }
        }
        
    }    
}
