<?php

if( ! empty( $_POST)){
    foreach($_POST as &$value){
        $value = trim($value);
    }
}