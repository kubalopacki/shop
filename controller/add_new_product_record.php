<?php

$image = $_POST['image'];
$full_name = $_POST['producer_model'];
$name_ = $_POST['partname'];
$price = $_POST['price'];

$sql = "INSERT INTO `products` (`name_`, `full_name`, `price`, `image`) VALUES ('$name_', '$full_name', '$price', '$image');";


$data = [
    'name_' => 'te',
    'price' => 123,
];
function magia($data)
{
    foreach ($data as $column => $value):
        echo "INSERT INTO 'products' ('$column') VALUES('$value');" . PHP_EOL;


    endforeach;
}


magia($data);



