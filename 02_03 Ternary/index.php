<?php
    $is_logged_in = false;
    $message = $is_logged_in ? "Welcome Back!" : "Please Login";

    echo $message;

    // Isset -> untuk memeriksa apakah suatu variable itu null atau tidak

    $name = "Ucup";
    $name = isset($name) ?  $name : "Harry";
    echo "\n" . $name;

    // atau bisa seperti ini : 


    $nama = 'Deli';
    $nama = $nama ?: 'Della';

    echo "\n" . $nama;
?>