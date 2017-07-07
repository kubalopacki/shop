<?php

$id = $_POST['product_id'];


$fields = array_keys($_SESSION['cart']);
$where_part = implode(', ', $fields);

$sql = "SELECT * FROM products
        WHERE product_id
        IN($where_part)
        ORDER BY name_ DESC ";

$stmt = $pdo->query($sql);
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt->closeCursor();

$tablica = [];
foreach ($products as $item) {
    $tablica[$item['product_id']] = $item;
}



$quantity = 0;
$suma = 0;
if (isset($_SESSION['cart'][$id])) {
    $_SESSION['cart'][$id]--;
    $quantity = $_SESSION['cart'][$id];
    $suma = $tablica[$id]['price'] * $_SESSION['cart'][$id];
}

if ($quantity <= 0) {
    unset($_SESSION['cart'][$id]);
}

$cart_value = 0;
foreach ($_SESSION['cart'] as $id => $amount) {
    $cart_value += $tablica[$id]['price'] * $amount;
}

header("Content-Type: application/json; charset=UTF-8");

echo json_encode([
    'quantity' => $quantity,
    'cart_value' => $cart_value,
    'suma' => $suma,
]);



