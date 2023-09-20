<?php
function checkFruits($value){
    $fruit= $_REQUEST['fruits'];
    if(isset($fruit) && is_array($fruit) && in_array($value, $fruit)){
        echo "checked";
    }
}