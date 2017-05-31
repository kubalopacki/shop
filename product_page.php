<?php

$id = $_GET['id'];
$stmt = $pdo->query("SELECT * FROM products WHERE product_id = $id");
$product = $stmt->Fetch(PDO::FETCH_ASSOC);
$stmt->closeCursor();

require __DIR__ . '/product_page.html.php';

