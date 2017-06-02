<?php

define('TEMPLATES_PATH', __DIR__ . '/templates');

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
session_start();
require_once __DIR__ . '/lib/connection.php';
require_once __DIR__ . '/lib/functions.php';

if ($uri === '/product') {
    require_once __DIR__ . '/controller/product_page.php';
} elseif ($uri === '/dodajdokoszyka') {
    require_once __DIR__ . '/controller/dodajDoKoszyka.php';
} elseif ($uri === '/cart') {
    require_once __DIR__ . '/controller/cart.php';
} elseif ($uri === '/sessionclear') {
    require_once __DIR__ . '/lib/sessionclear.php';
} else {
    require_once __DIR__ . '/controller/katalog.php';
}

