<?php

$sql = 'SELECT * FROM products ORDER BY name_ DESC ';
$stmt = $pdo->query($sql);
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt->closeCursor();

foreach ($products as $item) {
    $tablica[$item['product_id']] = $item;
}

require TEMPLATES_PATH . '/cart.html.php';