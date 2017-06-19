<?php


$customer_id = $_SESSION['user']['customer_id'];
$pdo->exec(update($_POST, "customers", "$customer_id"));


redirect('/', 303);