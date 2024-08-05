<?php
include 'multiple.php';

function double($num): float {
    return $num + 2;
}

echo double(9);

echo "\n";

echo Multiple\double(9);

?>