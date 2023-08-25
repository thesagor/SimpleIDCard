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

    function setVitapple($apple){
        $this->apple=$apple;
    }

    function checkvit(){        
        return $this->banana;
    }
    function checkvitapple(){        
        return $this->apple;
    }
}

$check = new vitamin();
$check->setVit("kola is vitamin phosphet \n");
$check->setVitapple("apple is vitamin A \n");

echo $check->checkvitapple();
echo $check->checkvit();

