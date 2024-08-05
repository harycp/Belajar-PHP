<?php

// Indexable Array
$colors = array("red", "green", "blue");
$numbers = array();

print_r($colors);

echo '<p>' . $colors[2] . '</p>';

$numbers[] = 10;
$numbers[] = 20;
$numbers[] = 30;

print_r($numbers);

// Associative Array
$person = array(
    'name' => 'Harry',
    'age' => 19,
    'city' => 'London',
    'country' => 'United Kingdom',
);

print_r($person);
print_r($person['name']);
print_r($person['country']);


// Multidimensional Array
$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9),
);

echo "\n";
print_r($matrix[1][1]);
print_r($matrix[0][2]);