<?php

$id = $_POST['product_id'];

$_SESSION['cart'][$id]--;

if ($_SESSION['cart'][$id] == 0) {
    unset($_SESSION['cart'][$id]);
}
