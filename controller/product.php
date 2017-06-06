<?php

$id = $_GET['id'];
$stmt = $pdo->query("SELECT * FROM _hello.products WHERE product_id = $id");
$product = $stmt->Fetch(PDO::FETCH_ASSOC);
$stmt->closeCursor();

require TEMPLATES_PATH . '/product_page.html.php';

