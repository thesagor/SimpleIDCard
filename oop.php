<?php

/*
    opp-> class
    ->properties>>
    -> method>>
    -> object>>
    -> construct
    -> access modifier
*/

class myClass{
    public $x=20, $y=20, $z;
    public function classFunction(){
        $this->z= $this->x+$this->y;
        return $this->z;
    }
}

$sum= new myClass();

$sum->x=20;
$sum->y=50;

echo $sum->classFunction();
