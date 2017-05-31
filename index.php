<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

require_once __DIR__ . '/connection.php';

if ($uri === '/products') {
    require_once __DIR__ . '/katalog.php';
} elseif ($uri === '/product') {
    require_once __DIR__ . '/product_page.php';
}


session_start();

