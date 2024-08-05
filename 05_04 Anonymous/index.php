<?php

$names = array("Harry", "Ron", "Hagrid", "Hermione");

usort($names, function($a, $b){
    return $a[1] <=> $b[1];
});

print_r($names);


$people = [
    ["name" => "Harry", "age" => 19],
    ["name" => "Ron", "age" => 20],
    ["name" => "Hagrid", "age" => 21],
    ["name" => "Hermione", "age" => 22],
];

usort($people, function($a, $b){
    return $a["age"] <=> $b["age"];
});

print_r($people);

?>