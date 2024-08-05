<?php

// readfile('treasure-island.txt');

$lines = file('treasure-island.txt');
foreach ($lines as $line) {
    echo $line;
}

// $hary = file_get_contents('https://casabona.org');

// if( strpos($hary, 'wp-contents') ){
//     echo '<p> Fuck Off i dont like this course! </p>';
// }