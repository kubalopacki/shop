<?php

$data = [
    'name_' => 'te',
    'price' => 123,
];

$imiona = [
    'Bartek',
    'Asia',
];

$nazwiska = [
    "Nowak",
    "Kowalska",
    "Czarny"
];

$wynik = array_map(function ($imie, $nazwisko) {
    return $imie . ' ' . $nazwisko;
}, $imiona, $nazwiska);


function magia($data)
{
    print_r($data);
    $fields = array_keys($data); //przypisuje zmiennej fields klucze z $data w postaci tablicy
    print_r($fields);
    $fields = array_map(function ($element) {
        return "`$element`";
    }, $fields);

    print_r($fields);

    $fields = implode(', ', $fields);

    $values = array_values($data);
    $values = array_map(function ($element) {
        return "'$element'";
    }, $values);
    $values = implode(', ', $values);

    $sql = "INSERT INTO 'products' ($fields) VALUES($values);\n";

    return $sql;
}

echo magia($data);