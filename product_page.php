<?php

ob_start();
require __DIR__ . '/connection.php';
ob_end_clean();

print_r($_GET);


$stmt = $pdo->query('SELECT * FROM products WHERE product_id = 10');

$product = $stmt->Fetch(PDO::FETCH_ASSOC);

$stmt->closeCursor();


require __DIR__ . '/product_page.html.php';


print_r($product);
