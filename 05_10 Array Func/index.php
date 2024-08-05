<?php

$data = [2, 4, 6, 8, 10, 12, 14, 16, 18, 20];

$dataResult = array_map(fn(int $value) => $value * 2, $data); // Untuk mengubah value array

var_dump($dataResult);

var_dump(implode(" ", $dataResult)); // Menggabungkan array menjadi string

rsort($data); // Mengurutkan secara descending
var_dump($data);

$persons = [
    "employe" => "Rizky",
    "manager" => "Harry",
    "supervisor" => "Hermione",
];

var_dump(array_keys($persons)); // Mengambil index dari array
var_dump(array_values($persons)); // Mengambil value dari array