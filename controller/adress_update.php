<?php

print_r($_POST);

$login = $_SESSION['user']['login'];
$password = $_SESSION['user']['password'];
$pdo->exec(update($_POST, "customers", "$login", "$password"));

//redirect('/', 303);