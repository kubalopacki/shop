<?php

require_once __DIR__ . '/../lib/connection.php';


$sql = "SELECT * FROM orders WHERE status<4 ORDER BY order_date DESC";
$stmt = $pdo->query($sql);
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt->closeCursor();

$zamowienia = [];

foreach ($orders as $item) {
    $zamowienia[$item['order_id']] = $item;
}


require TEMPLATES_PATH . '/zamowienia_do_wysylki.html.php';

//print_r($zamowienia);