<?php

$login = $_POST['login'];
$password = $_POST['password'];

$user_sql = "SELECT customer_id FROM `customers` WHERE login='$login' AND password='$password'";
$user_stmt = $pdo->query($user_sql);
$user = $user_stmt->fetch(PDO::FETCH_ASSOC);

if ($user) {
    $_SESSION['user'] = $user;
    redirect('/products', 303);
}

$admin_sql = "SELECT * FROM `admins` WHERE login='$login' AND password='$password'";
$admin_stmt = $pdo->query($admin_sql);
$admin = $admin_stmt->fetch(PDO::FETCH_ASSOC);

if ($admin) {
    $_SESSION['admin'] = $admin;
    redirect('/panel', 303);
}

$_SESSION['flashMessage'] = "Nie możesz się zalogować ziomuś";

redirect($_SERVER['HTTP_REFERER'], 403);
