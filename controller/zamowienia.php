<?php

$sql = 'SELECT * FROM orders ORDER BY order_id DESC ';
$stmt = $pdo->query($sql);
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt->closeCursor();

foreach ($orders as $item) {
    $zamowienia[$item['order_id']] = $item;
}

//print_r($zamowienia);

require TEMPLATES_PATH . '/zamowienia.html.php';