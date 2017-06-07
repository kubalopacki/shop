<?php

$sql = 'SELECT * FROM products ORDER BY price DESC ';
$stmt = $pdo->query($sql);
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt->closeCursor();

require TEMPLATES_PATH . '/katalog.html.php';



