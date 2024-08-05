<?php


$number = -2;
function add_number($number){
    if($number < 0){
        return abs($number);
    }else{
        return $number + 1;
    }
};   

$result = match($number){
    -2,-1,0 => "number is less than 0 we must change it = " . add_number($number),
    1 => "number is 1",
    2 => "number is 2",
    default => "number is not 1 or 2",
};

echo $result;
?>