<?php
    $a = 20;
    $b = 20;


    if($a > $b){
        echo "a is greater than b";
    }else if($a < $b){
        echo "a is less than b";
    }else{
        echo "a is equal to b";
    }

    $is_logged_in = true;
    if($is_logged_in){
        $message = "Welcome Back!";
    }else{
        $message = "Please Login";
    }

    echo "\n". $message;
?>
