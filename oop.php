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
    public function kola(){
        echo "Kolar color hosse {$this->color} and vitamin hosse {$this->vitamin}";
    }
}

//Object
$kola= new MyClass("Holud","A+ \n");
echo $kola->kola();
echo "\n";

class kolar extends MyClass{
    function kola(){
        return "This is override kola \n";
    }
}

$kolas= new kolar("nai", "D");
echo $kolas->kola();

class amrclass extends MyClass{
    function apple(){
        return "Appple er color hosse {$this->color} and apple er vitamin {$this->vitamin}";
    }
}

$apple= new amrclass("lal", "AAA");
echo $apple->apple();
