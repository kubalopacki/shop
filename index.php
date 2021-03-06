<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

define('TEMPLATES_PATH', __DIR__ . '/templates');

session_start();

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/lib/connection.php';
require_once __DIR__ . '/lib/functions.php';
require_once __DIR__ . '/lib/config.php';
require_once __DIR__ . '/lib/twig.php';

//print_r($_SESSION);

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = trim($uri, '/');
$segments = explode('/', $uri);
$controller = empty($uri) ? 'homepage' : array_shift($segments);
$path = __DIR__ . "/controller/{$controller}.php";

if (is_readable($path)) {
    require_once $path;
} else {
    require_once __DIR__ . '/controller/404.php';
}