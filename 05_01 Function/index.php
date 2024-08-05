<?php

function is_palindrom($string){
    $string = str_replace(' ', '', strtolower($string));
    return $string == strrev($string);
}

$check_str = "Race Car";

if(is_palindrom($check_str)){
    echo $check_str . " is a palindrom";
}else{
    echo $check_str . " is not a palindrom";
}

?>