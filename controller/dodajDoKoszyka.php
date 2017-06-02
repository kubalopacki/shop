<?php

$id = $_GET['id'];

if (array_key_exists($id, $_SESSION['cart'])) {
    $_SESSION['cart'][$id] = $_SESSION['cart'][$id] + 1;
} else {
    $_SESSION['cart'][$id] = 1;
}

redirect($_SERVER["HTTP_REFERER"], 303);


