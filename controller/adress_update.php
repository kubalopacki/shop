<?php


$login = $_SESSION['user']['login'];
$pdo->exec(update($_POST, "customers", "$login"));

redirect('/', 303);