<?php

$fn = "Harry";
$ln = "Capri";

$sayHello = fn() => "Hello $fn $ln" . PHP_EOL;

echo $sayHello();

$multiple = fn(int $a, int $b) => $a * $b . PHP_EOL;

echo $multiple(5,3);