<?php

/*
    opp-> class
    ->properties>>
    -> method>>
    -> object>>
    -> construct
    -> access modifier
*/

//clss
class vitamin {
    //proerties
    public $banana, $apple, $mango;

    //method

    function setVit($banana){
        $this->banana=$banana;
    }

    function checkvit(){        
        return $this->banana;
    }
}

$banana = new vitamin();
$banana->setVit("vitamin phosphet");
echo $banana->checkvit();

