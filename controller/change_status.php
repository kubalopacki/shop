<?php

$order_id = $_POST['order_id'];

$status = $_POST['status'];

$sql = "UPDATE `orders` SET status='$status' WHERE order_id='$order_id'";

$pdo->exec($sql);


http_response_code(204);
