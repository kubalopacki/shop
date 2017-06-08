<?php

$login = $_POST['login'];
$password = $_POST['haslo'];

echo $login;
PHP_EOL;
echo $password;
PHP_EOL;

$pdo->exec(newAccount($login, $password));

redirect('/', 303);


