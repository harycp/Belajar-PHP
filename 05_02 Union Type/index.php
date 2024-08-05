<?php

function addNumber(int | float $number): int | float {
    $result = $number + $number;
    return $result;
}

echo addNumber(1.2);
?>