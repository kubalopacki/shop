<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

define('TEMPLATES_PATH', __DIR__ . '/templates');

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
session_start();
require_once __DIR__ . '/lib/connection.php';
require_once __DIR__ . '/lib/functions.php';

if ($uri === '/product') {
    require_once __DIR__ . '/controller/product_page.php';
} elseif ($uri === '/dodajdokoszyka') {
    require_once __DIR__ . '/controller/add_to_cart.php';
} elseif ($uri === '/cart') {
    require_once __DIR__ . '/controller/cart.php';
} elseif ($uri === '/sessionclear') {
    require_once __DIR__ . '/lib/sessionclear.php';
} elseif ($uri === '/remove') {
    require_once __DIR__ . '/controller/remove.php';
} elseif ($uri === '/checkout') {
    require_once __DIR__ . '/controller/checkout.php';
} elseif ($uri === '/newproduct') {
    require_once __DIR__ . '/controller/new_product.php';
} elseif ($uri === '/add_new_product_record') {
    require_once __DIR__ . '/controller/add_new_product_record.php';
} else {
    require_once __DIR__ . '/controller/catalog.php';
}

