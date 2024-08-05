<?php

function factorialLoop(int $number):int {
    $total = 1;

    for($i = 1; $i <= $number; $i++){
        $total *= $i;
    }

    return $total;
}

echo var_dump(factorialLoop(5));
echo var_dump(factorialLoop(6));

$recursive = function(int $number) use (&$recursive){
    return $number <= 1 ? 1 : $number * $recursive($number - 1);
};

echo var_dump($recursive(5));
echo var_dump($recursive(6));