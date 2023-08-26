<?php

/*
    opp-> class
    ->properties>>
    -> method>>
    -> object>>
    -> construct
    -> access modifier
*/

// clss
class MyClass{
    public $color, $vitamin;

    //construct
    public function __construct($color, $vitamin) {
        $this->color = $color;
        $this->vitamin = $vitamin;
    }

    //methods
    function kola(){
        echo "Kolar color hosse {$this->color} and vitamin hosse {$this->vitamin}";
    }
}

//Object
$kola= new MyClass("Holud","A+");
echo $kola->kola();
