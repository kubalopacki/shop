<?php

$login = $_POST['login'];
$password = $_POST['password'];

$user_sql = "SELECT customer_id FROM `customers` WHERE login='$login' AND password='$password'";
$user_stmt = $pdo->query($user_sql);
$user = $user_stmt->fetch(PDO::FETCH_ASSOC);

if ($user) {
    $_SESSION['user'] = $user;
    $_SESSION['navbar'] = 'user';
    redirect('/products', 303);
}

$admin_sql = "SELECT * FROM `admins` WHERE login='$login' AND password='$password'";
$admin_stmt = $pdo->query($admin_sql);
$admin = $admin_stmt->fetch(PDO::FETCH_ASSOC);

if ($admin) {
    $_SESSION['admin'] = $admin;
    $_SESSION['navbar'] = 'admin';
    redirect('/panel', 303);
}

$_SESSION['flashMessage'] = "Nieprawidłowy login lub hasło.";

redirect($_SERVER['HTTP_REFERER'], 403);

