<?php
//print_r($_POST);

$finish_order_table = $_POST;
$finish_order_table['wartosc_zamowienia'] = $_SESSION['cart_value'];
$finish_order_table['sposob_wysylki'] = $_SESSION['shipment_method'];
$finish_order_table['customer_id'] = $_SESSION['user']['customer_id'];

//print_r($finish_order_table);

$polecenie = insert($finish_order_table, "orders");

$pdo->exec($polecenie);
/*
$imie_nazwisko = $_POST['adres'];
$ulica = $_POST['Norwida'];
$nr_domu=$_POST[''];

/*{
    $sql = "INSERT INTO `orders`
(imie_nazwisko, ulica, numer_domu, kod_pocztowy, miasto, numer_telefonu, customer_id, komentarz, wartosc_zamowienia, sposob_wysylki )
VALUES ('$imie_nazwisko','$ulica','$numer_domu','$kod_pocztowy','$miasto','$numer_telefonu','$customer_id','$komentarz','$wartosc_zamowienia','$sposob_wysylki' )";

    echo $sql;
    return $sql;

}

$customer_id = $_SESSION['user']['customer_id'];
$sposob_wysylki = $_SESSION['shipment_method'];



*/

