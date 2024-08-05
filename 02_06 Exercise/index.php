<?php

$min = 1;
$max = 50;
$num = rand($min, $max);


$guess = 100;

echo "\n" . $num;
echo "\n" . $guess . "\n";

if($guess < $min || $guess > $max){
    echo "Your guess is out of range";
    exit();
}
if($guess === $num){
    echo "Your guess is correct";
}else if($guess > $num){
    echo "Your guess is too high";
}else if($guess < $num){
    echo "Your guess is too low";
}




?>