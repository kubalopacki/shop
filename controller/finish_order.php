<?php


if (isset($_SESSION['cart'])) {

    $stmt = $pdo->query(readDB($_SESSION['cart']));
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();

    $fields = array_keys($_SESSION['cart']); //przypisuje zmiennej fields klucze z $data w postaci tablicy
    $where_part = implode(', ', $fields);


    $sql = "SELECT * FROM products
        WHERE product_id
        IN($where_part)
        ORDER BY name_ DESC ";

    echo $sql;

    $stmt = $pdo->query($sql);
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();

    foreach ($products as $item) {
        $tablica[$item['product_id']] = $item;
    }
    $cart_value = 0;
    foreach ($_SESSION['cart'] as $id => $quantity) {
        $cart_value = $tablica[$id]['price'] * $quantity + $cart_value;
    }


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
    $finish_order_table['wartosc_zamowienia'] = $cart_value;
    $finish_order_table['sposob_wysylki'] = $_SESSION['shipment_method'];
    if (isset($_SESSION['user']['customer_id'])) {
        $finish_order_table['customer_id'] = $_SESSION['user']['customer_id'];
    } else {
        $finish_order_table['customer_id'] = "niezalogowany";
    }
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
}

redirect('/', 303);

