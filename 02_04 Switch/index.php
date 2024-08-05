<?php
    $option = 5;
    switch($option){
        case 1:
            $mess = "<p>You Choose 1</p>";
            break;
        case 2:
            $mess = "<p><b>You Choose 2</b></p>";
            break;
        case 3:
            $mess = "<p>You Choose 3</p>";
            break;
        default:
            $mess = "<p>You choose something else</p>";
    }

    echo "\n" . $mess;


    $name = 'Hary';
    switch($name):
        case 'Hary':
            $message = "<p style='color:red'>Welcome Back ". $name . "</p>";
            break;
        case 'Dedi':
            $message = "<p>Welcome Back ". $name . "</p>";
            break;
        case 'Joko':
            $message = "<p>Welcome Back ". $name . "</p>";
            break;
        default:
        $message = "<p>Welcome Back ". $name . "</p>";
    endswitch;

    echo "\n" . $message;

?>