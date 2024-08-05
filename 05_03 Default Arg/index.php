<?php

function math($a, $b = 2, $op = "mul"){
    switch($op){
        case "add":
            return $a + $b;
            break;
        case "sub":
            return $a - $b;
            break;
        case "div":
            return $a / $b;
            break;
        default:
            return $a * $b;
            break;
    }
}

echo math(5, 2) . "\n"; // will return 10 (multiply by default)

echo math(5, 2, "add") . "\n"; // will return 7
echo math(5, 2, "div") . "\n"; // will return 2.5
echo math(5, 2, "sub") . "\n"; // will return 3


echo math(5, op:"sub", b:9)


?>
