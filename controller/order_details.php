<?php

$id = $_GET['orderid'];

$stmt = $pdo->query("SELECT * FROM `orders` WHERE order_id = $id");
$order = $stmt->Fetch(PDO::FETCH_ASSOC);
$stmt->closeCursor();

$table = json_decode($order['szczegoly_zamowienia'], true);


require TEMPLATES_PATH . '/order_details.html.php';

/*
print_r($table);

print_r($order);

print_r($_SESSION);
*/