<?php

for($i = 10; $i >= 0; $i--){
    echo"\n" . $i;
}

for($i = 0; $i < 10; $i++){
    echo"\n" . $i;
}

$colors = array("red", "yellow", "green", "blue");

for($i = 0; $i < sizeof($colors); $i++){
    echo "\n" . $colors[$i];
}
?>