<?php

$id = $_POST['product_id'];



if (isset($_SESSION['cart']) AND array_key_exists($id, $_SESSION['cart'])) {
    $_SESSION['cart'][$id] = $_SESSION['cart'][$id] + 1;
} else {
    $_SESSION['cart'][$id] = 1;
}

echo array_sum($_SESSION['cart']);


