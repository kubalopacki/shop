<?php

ob_start();
require __DIR__ . '/connection.php';
ob_end_clean();

$stmt = $pdo->query('SELECT * FROM products WHERE product_id = 10');
$product = $stmt->Fetch(PDO::FETCH_ASSOC);
$stmt->closeCursor();

require __DIR__ . '/product_page.html.php';
