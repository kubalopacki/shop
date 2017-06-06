<?php
/*
$image = $_POST['image'];
$full_name = $_POST['producer_model'];
$name_ = $_POST['partname'];
$price = $_POST['price'];

$sql = "INSERT INTO `products` (`name_`, `full_name`, `price`, `image`) VALUES ('$name_', '$full_name', '$price', '$image');";
*/

$data = [
    'name_' => $_POST['partname'],
    'price' => $_POST['price'],
    'full_name' => $_POST['producer_model'],
    'image' => $_POST['image'],
];
function magia($data)
{
    $fields = array_keys($data); //przypisuje zmiennej fields klucze z $data w postaci tablicy
    $fields = array_map(function ($element) {
        return "`$element`";
    }, $fields);
    $fields = implode(', ', $fields);

    $values = array_values($data);
    $values = array_map(function ($element) {
        return "'$element'";
    }, $values);
    $values = implode(', ', $values);

    $sql = "INSERT INTO `products` ($fields) VALUES($values);";
    echo $sql;
    return $sql;

}

$stmt = $pdo->exec(magia($data));

/*
$data = [
    'name_' => 'te',
    'price' => 123,
];
// INSERT INTO `products` (`name`, `price`) VALUES ('te', 123);

magia($data);
*/


redirect($_SERVER["HTTP_REFERER"], 303);


