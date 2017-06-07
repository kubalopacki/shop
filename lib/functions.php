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

function update($data, $dbtable, $login, $haslo)
{
    /*$fields = array_keys($data); //przypisuje zmiennej fields klucze z $data w postaci tablicy
    $fields = array_map(function ($element) {
        return "`$element`";
    }, $fields);
    $fields = implode(', ', $fields);

    $values = array_values($data);
    $values = array_map(function ($element) {
        return "'$element'";
    }, $values);
    $values = implode(', ', $values);
    */
    foreach ($data as $column => $value)


        $sql = "UPDATE `$dbtable` SET `$column` = '$value' WHERE 'login'=$login AND 'password'='$haslo'";

    echo $sql;
    return $sql;

}