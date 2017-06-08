<?php

$login = $_POST['login'];
$password = $_POST['haslo'];
$password2 = $_POST['haslo2'];

/*
echo $login;
PHP_EOL;
echo $password;
PHP_EOL;
*/

if ($password === $password2) {

    $pdo->exec(newAccount($login, $password));

    redirect('/succes', 303);
}

require TEMPLATES_PATH . '/dif_passwords_mistake.html.php';
