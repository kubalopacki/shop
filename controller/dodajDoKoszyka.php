<?php
//ze strony głównej

$id = $_GET['id'];

if (array_key_exists($id, $_SESSION['cart'])) {
    $_SESSION['cart'][$id] = $_SESSION['cart'][$id] + 1;
} else {
    $_SESSION['cart'][$id] = 1;
}


//print_r($_SESSION);

redirect($_SERVER["HTTP_REFERER"], 303);

//print_r($_SERVER);

