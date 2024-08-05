<?php

$colors = array("red", "yellow", "green", "blue");
$person = array(
    "john" => "Bekasi",
    "harry" => "Jakarta",
    "jerry" => "Surabaya",
    "lenny" => "Bandung",
);

// foreach normal array

foreach($colors as $color){
    echo "\n" . $color;
}

// foreach for multi-dimensional array
foreach($person as $name => $city){
    echo "\n" . $name . " lives in " . $city;
}
?>