<?php

$sesja = [
    18 => 1,
    23 => 2,
    24 => 4,
    11 => 9,
];

$fields = array_keys($sesja); //przypisuje zmiennej fields klucze z $data w postaci tablicy
$fields = array_map(function ($element) {
    return "`$element`";
}, $fields);
$fields = implode(', ', $fields);

$values = array_values($sesja);
//$values = array_map(function ($element) {
//    return "'$element'";
//}, $values);
$values = implode(', ', $values);


echo $fields . PHP_EOL;

echo $values;

$sql = "SELECT * FROM `products` WHERE product_id=($fields) ";

echo $sql;