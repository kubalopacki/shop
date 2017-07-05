<?php

$sql = 'SELECT * FROM products ORDER BY name_ DESC ';
$stmt = $pdo->query($sql);
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt->closeCursor();

foreach ($products as $item) {
    $tablica[$item['product_id']] = $item;
}


$id = $_POST['product_id'];


if (isset($_SESSION['cart']) AND array_key_exists($id, $_SESSION['cart'])) {

    $_SESSION['cart'][$id] = $_SESSION['cart'][$id] - 1;

}

if ($_SESSION['cart'][$id] <= 0) {

    unset($_SESSION[$id]);

    return;

} else {

    $sum = $

    $total = $_SESSION['cart_value'] - $tablica[$id]['price'];

}


header("Content-Type: application/json; charset=UTF-8");

echo json_encode([
    'quantity' => $_SESSION['cart'][$id],
    'sum' => $sum,
]);



