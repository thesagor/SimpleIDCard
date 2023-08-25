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
class Math{
    //properties
    public $a, $b, $x;

    //construct
    public function __construct($a,$b) {
        $this->a = $a;
        $this->b = $b;
    }

    //function
    function sum(){
        $this->x= $this->a+ $this->b;
        return $this->x;
    }
    
}

$mathkor= new Math(20,30);
echo $mathkor->sum();