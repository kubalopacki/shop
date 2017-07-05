<?php

$stmt = $pdo->query(readDB($_SESSION['cart']));
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt->closeCursor();


$products_to_json = [];
foreach ($products as $product) {
    $product_id = intval($product['product_id']);
    $product['quantity'] = $_SESSION['cart'][$product_id];
    $products_to_json[$product_id] = $product;
}


//print_r($products_to_json);

$szczegoly_zamowienia = json_encode($products_to_json);


$szczegoly_zamowienia_table = [];

$finish_order_table = $_POST;
$finish_order_table['wartosc_zamowienia'] = $_SESSION['cart_value'];
$finish_order_table['sposob_wysylki'] = $_SESSION['shipment_method'];
$finish_order_table['customer_id'] = $_SESSION['user']['customer_id'];
$finish_order_table['szczegoly_zamowienia'] = $szczegoly_zamowienia;
$finish_order_table['order_date'] = date('Y-m-d H:i:s');
$finish_order_table['status'] = $_POST['status'];

$user_data = [];
$user_data['imie_nazwisko'] = $finish_order_table['imie_nazwisko'];
$user_data['ulica'] = $finish_order_table['ulica'];
$user_data['nr_domu'] = $finish_order_table['numer_domu'];
$user_data['kod_pocztowy'] = $finish_order_table['kod_pocztowy'];
$user_data['miasto'] = $finish_order_table['miasto'];
$user_data['telefon'] = $finish_order_table['numer_telefonu'];


$polecenie_sql = build_insert_sql_query($finish_order_table, "orders");

$pdo->exec($polecenie_sql);

$polecenie_sql = update($user_data, "customers", $_SESSION['user']['customer_id']);

$pdo->exec($polecenie_sql);

echo $polecenie_sql;


unset($_SESSION['cart']);
unset($_SESSION['cart_value']);
unset($_SESSION['shipment_method']);


redirect('/', 303);

