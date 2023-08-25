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
    //Properties
    public $name, $n;

    /*construct
    public function __construct($name,$n) {
        $this->name = $name;
    } */
    

    //method
    function Dname($name){
        echo "Hello All, I am $name";        
    }

    function factorial($n){
        if($n<=1){
            return 1;
        }else{
            return $n*$this->factorial($n-1);
        }
    }
}

$name= new MyClass();
echo $name->Dname("Scott\n");

$fact=new MyClass();
echo $fact->factorial(5)."\n";



$subject= ["english", "bangla", "ict", "science", "Biology"];
sort($subject);
foreach ($subject as $key => $value) {
    
    echo "[$key] => $value\n";
}

