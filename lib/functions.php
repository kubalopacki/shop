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

function update($data, $dbtable, $login)
{
    $fields = [];
    foreach ($data as $column => $value) {
        $fields[] = "$column='$value'";
    }

    $fields = implode(', ', $fields);


    $sql = "UPDATE `$dbtable` SET $fields WHERE login='$login'";

    echo $sql;
    return $sql;

}

function newAccount($login, $password)
{
    $sql = "INSERT INTO `customers` (login, password) VALUES('$login', '$password') ";

    echo $sql;
    return $sql;
}

