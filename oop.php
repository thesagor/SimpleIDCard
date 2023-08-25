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
class myClass{
    //propertes
    public $name,$weight, $color;

    //method
    function set_name($name){
        $this->name=$name;
    }
    function get_name(){
        return $this->name;
    }
}
//Object

$amra= new myClass();
$amra->set_name('vitamin c');
echo $amra->get_name();

