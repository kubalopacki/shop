<?php

if (!isset($_SESSION['cart'])) {
    redirect($_SERVER["HTTP_REFERER"] ?? "products", 303);
}
$fields = array_keys($_SESSION['cart']); //przypisuje zmiennej fields klucze z $data w postaci tablicy
$where_part = implode(', ', $fields);


$sql = "SELECT * FROM products
        WHERE product_id
        IN($where_part)
        ORDER BY name_ DESC ";


$stmt = $pdo->query($sql);
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt->closeCursor();

foreach ($products as $item) {
    $tablica[$item['product_id']] = $item;
}
$cart_value = 0;
foreach ($_SESSION['cart'] as $id => $quantity) {
    $cart_value = $tablica[$id]['price'] * $quantity + $cart_value;
}

require TEMPLATES_PATH . '/checkout.html.php';