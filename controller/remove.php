<?php

$id = $_GET['id'];

$_SESSION['cart'][$id]--;
if ($_SESSION['cart'][$id] == 0) {
    unset($_SESSION['cart'][$id]);
}
redirect($_SERVER["HTTP_REFERER"], 303);