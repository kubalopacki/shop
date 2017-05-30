<?php

require __DIR__.'/connection.php';

$sql = 'SELECT * FROM products';
$stmt = $pdo->query($sql);
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt->closeCursor();

require __DIR__ . '/katalog.html.php';
