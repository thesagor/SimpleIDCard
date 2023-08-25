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
class MATH{
    //properties
    public $a, $b, $c;

    //constructor
    public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
    }
    

    //methods
    function sumSet(){
        $this->c=$this->a+$this->b;
        return $this->c;      
    }
    
}

//object
$sum= new MATH(30,23);
echo $sum->sumSet();

