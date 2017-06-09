<?php
print_r($_POST);
/*{
    $sql = "INSERT INTO `orders`
(imie_nazwisko, ulica, numer_domu, kod_pocztowy, miasto, numer_telefonu, customer_id, komentarz, wartosc_zamowienia, sposob_wysylki )
VALUES ('$imie_nazwisko','$ulica','$numer_domu','$kod_pocztowy','$miasto','$numer_telefonu','$customer_id','$komentarz','$wartosc_zamowienia','$sposob_wysylki' )";

    echo $sql;
    return $sql;

}*/

$customer_id = $_SESSION['user']['customer_id'];
$sposob_wysylki = $_SESSION['shipment_method'];


