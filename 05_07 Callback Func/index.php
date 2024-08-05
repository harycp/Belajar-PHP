<?php

function changeString(string $name, callable $filter):void{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

changeString("hArrY", "strtolower");
changeString("hArrY", "strtoupper");
changeString("hArrY", function(string $name){
    return strtoupper($name);
});
changeString("hArrY", function(string $name){
    return strtolower($name);
});

changeString("hArRy", fn($name)=> strtoupper($name));
changeString("hArRy", fn($name)=> strtolower($name));