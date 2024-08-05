<?php

$name = array("John", "Harry", "Ron", "Hermione");

var_dump(join(" ", $name)); // Menggabungkan array menjadi satu string
var_dump(explode(" ", "Hary Capri Chrisye")); // Mengubah string menjadi array
var_dump(strtolower("HaRy CApRI ChriSyE")); // Mengubah semua huruf menjadi huruf kecil
var_dump(strtoupper("HaRy CApRI ChriSyE")); // Mengubah semua huruf menjadi huruf besar
var_dump(trim("    Hary Capri      ")); // Menghapus semua spasi pada awal dan akhir string
var_dump(substr("Hary Capri", 0, 4)); // Mengambil substring dari string