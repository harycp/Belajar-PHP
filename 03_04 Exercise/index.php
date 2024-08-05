<?php

// A
$a = 14;
$b = 82;
$c = 32;
$d = 2;

$resultA = ($a + $b - ($c / $d)) ** 2;

echo $resultA;
echo "\n";

// B

$a = 18;
$b = 3;
$c = 6;
$d = 9;
$e = 10;

$resultB = $a * (($b / $c) - $d) * $e;

echo $resultB;
echo "\n";

// C

$a = 5;
$b = 12;
$c = 2;
$d = 8;
$e = 4;
$f = 12;
$g = 6;

$resultC = $a * (($b / $c) - ($d * $e) + ($f * $g));

echo $resultC;


$allResults = array($resultA, $resultB, $resultC);
print_r($allResults);
echo (15 % 12)

?>