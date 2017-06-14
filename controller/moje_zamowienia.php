<?php

$customerid = $_SESSION['user']['customer_id'];

$sql = "SELECT * FROM `orders` WHERE customer_id='$customerid'";

$stmt = $pdo->query($sql);

$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($orders as &$order) {
    $order['products'] = json_decode($order['szczegoly_zamowienia'], true);
}
unset($order);


$stmt->closeCursor();

$twig->display('moje_zamowienie.twig', [
    'orders' => $orders,
]);

//$details = json_decode($yourorders['szczegoly_zamowienia']);


