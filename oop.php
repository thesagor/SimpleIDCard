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

    //methods

    function sumSet($a,$b){
        $this->c=$a+$b;        
    }
    function sumSow(){
        return $this->c;
    }
}

//object
$sum= new MATH();
$sum->sumSet(20,30);
echo $sum->sumSow();

