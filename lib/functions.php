<?php

function redirect($url, $code)
{
    http_response_code($code);
    header('Location: ' . $url);

    exit(0);
}

function insert($data, $dbtable)
{
    $fields = array_keys($data); //przypisuje zmiennej fields klucze z $data w postaci tablicy
    $fields = array_map(function ($element) {
        return "`$element`";
    }, $fields);
    $fields = implode(', ', $fields);

    $values = array_values($data);
    $values = array_map(function ($element) {
        return "'$element'";
    }, $values);
    $values = implode(', ', $values);

    $sql = "INSERT INTO `$dbtable` ($fields) VALUES($values);";
    echo $sql;
    return $sql;

}

function update($data, $dbtable, $customer_id)
{
    $fields = [];
    foreach ($data as $column => $value) {
        $fields[] = "$column='$value'";
    }

    $fields = implode(', ', $fields);


    $sql = "UPDATE `$dbtable` SET $fields WHERE customer_id='$customer_id'";

    echo $sql;
    return $sql;

}

function newAccount($login, $password)
{
    $sql = "INSERT INTO `customers` (login, password) VALUES('$login', '$password') ";

    echo $sql;
    return $sql;
}


function readDB($sesja)
{
    $fields = array_keys($sesja); //przypisuje zmiennej fields klucze z $data w postaci tablicy
    //$fields = array_map(function ($element) {
    //    return "`$element`";
    //}, $fields);
    $fields = implode(', ', $fields);

    $values = array_values($sesja);
    $values = array_map(function ($element) {
        return "'$element'";
    }, $values);
    $values = implode(', ', $values);

    $sql = "SELECT * FROM `products` WHERE product_id  IN ($fields)";

    echo $sql;
    return $sql;

}



/**
 * Funkcja zmieniająca jedną wartość w tabeli(np. zmiana statusu zamówienia)
 *
 * @param $dbname string Nazwa tabelki
 * @param $column string Kolumna, którą chcesz zmienić
 * @param $row
 * @param string $order_id Identyfikator zamówienia którego status ma zostać zmieniony
 * @param string $new Nowa wartość dla kolumny $column
 * @return string Zwraca wygenerowane polecenie MySql
 *
 */
function upadteOneColumn($dbname, $column, $row, $new, $order_id)
{
    $sql = "UPDATE `$dbname` SET $column='$new' WHERE $row='$order_id'";

    echo $sql;
    return $sql;

}




function updateSet (array $fields) {
    $fields = [];
    foreach ($data as $column => $value) {
        $fields[] = "$column='$value'";
    }

    $sqlPart = implode(', ', $fields);

    return $sqlPart;
}


