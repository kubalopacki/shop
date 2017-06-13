<?php

$orderID = $_POST['potwierdzenie'];

//echo $idproduktu;

$data = ['status' => "2"];


$sqlPart = updateSet($data);

$sql = "UPDATE `orders` SET $sqlPart WHERE order_id='$orderID'";

$pdo->exec($sql);

redirect($_SERVER["HTTP_REFERER"], 303);

