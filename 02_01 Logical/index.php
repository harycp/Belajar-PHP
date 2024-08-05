<?php
    $a = 10 > 1;
    $b = 1 != 1;
    $c = $a || $b;
    $d = $b && $c;
    $e = !$d;

    $logics = array($a, $b, $c, $d, $e);
    print_r($logics);
    var_dump($logics);
?>