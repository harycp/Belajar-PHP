<?php

$number1 = 0;
$number2 = 1;

// $fibbo = 20;
// for($i = 1; $i <= $fibbo; $i++){
//     if($fibbo <= 0){
//         echo "Your number is less than 0";
//         break;
//     }
//     if($i == 1){
//         echo $number1 . " ";
        
//     }elseif($i == 2){
//         echo $number2 ." ";
//     }
//     else{
//         // create fibonacci sequence
//         $number = $number1 + $number2;
//         $number1 = $number2;
//         $number2 = $number;
//         echo $number . " ";

//     }
// }

$curr = 1;
$prev = 0;

$lim = 14;

while($curr <= $lim){
    echo $curr . " ";
    $next = $curr + $prev;
    $curr = $prev;
    $prev = $next;
}

?>