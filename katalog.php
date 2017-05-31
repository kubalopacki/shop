<?php

$sql = 'SELECT * FROM products ORDER BY name_ DESC ';
$stmt = $pdo->query($sql);
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt->closeCursor();

require __DIR__ . '/katalog.html.php';


