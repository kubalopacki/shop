<?php

$data = ["imie_nazwisko" => "Jan Kowalski", "ulica" => "Kwiatowa", "numer_domu" => "1", "kod_pocztowy" => "58-226", "miasto" => "Rawicz", "numer_telefonu" => "601288895"];
/*

foreach ($data as $column => $value) {
    $clength = strlen($column) + 2;
    $vlength = strlen($value) + 2;
    if ($clength >= $vlength) {
        echo sprintf("%-{$clength}s", $column);
    } else {
        echo sprintf("%-{$vlength}s", $column);
    }
}
echo PHP_EOL;

foreach ($data as $column => $value) {
    $clength = strlen($column) + 2;
    $vlength = strlen($value) + 2;
    if ($clength >= $vlength) {
        echo sprintf("%-{$clength}s", $value);
    } else {
        echo sprintf("%-{$vlength}s", $value);
    }
}

*/

unset($data['miasto']);

print_r($data);

