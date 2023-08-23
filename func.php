<?php
    //include 'form.php';
    if(isset($_POST['submit']));
    $text= $_POST['texts'];

    function myBio($name, $age, $basa, $school, $aim, $text){
        return "Hi my name is $name. I am $age years old. I live in $basa. My school is $school. My aim is $aim, The other is NOW <br> $text";

    }
echo strtoupper(myBio('sagor', '22', 'harpora', 'Ideal', 'Freelancer',$text));