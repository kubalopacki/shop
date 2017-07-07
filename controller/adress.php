<?php

if (!isset($_SESSION['cart'])){
    redirect('/', 303);
}

$_SESSION['shipment_method'] = $_POST['wysylka'];

if (isset($_SESSION['user']['customer_id'])) {
    $customer_id = $_SESSION['user']['customer_id'];

    $sql = "SELECT * FROM `customers` WHERE customer_id='$customer_id'";
    $stmt = $pdo->query($sql);
    $dane = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
}


require_once TEMPLATES_PATH . '/adress.html.php';