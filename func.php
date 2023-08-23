<?php
    //include 'form.php';

    function myBio($name, $age, $basa, $school, $aim){
        return "Hi my name is $name. I am $age years old. I live in $basa. My school is $school. My aim is $aim";

    }
echo strtoupper(myBio('sagor', '22', 'harpora', 'Ideal', 'Freelancer'));