
<?php
    class constClass{
        const name= "I am sagor ahmed";
        public $nameT= "This is taskia";

        public function user(){
            echo self::name;
        }
    }

    $newname= new constClass();
    $newname->user();