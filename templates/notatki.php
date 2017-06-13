<?php


$tablica = [
    'Kuba' => 'Łopacki',
    'Ola' => 'Panak',
    'Damian' => 'Lechniuk'
];

$tablica2[] = "kuba='lopacki";

print_r($tablica2);



function updateSet(array $data)
{
    $fields = [];
    foreach ($data as $column => $value) {
        $fields[] = "$column='$value'";
    }

    $sqlPart = implode(', ', $fields);

    echo $sqlPart;

    return $sqlPart;
}

updateSet($tablica);
