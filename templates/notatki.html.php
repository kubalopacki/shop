<?php
$json = '
{
"firstName": "John",
"lastName" : "Smith",
"age"      : 25,
"address"  :
{
"streetAddress": "21 2nd Street",
"city"         : "New York",
"state"        : "NY",
"postalCode"   : "10021"
},
"phoneNumber":
[
{
"type"  : "",
"number": "212 555-1234"
},
{
"type"  : "fax",
"number": "646 555-4567"
}
]
}';

$data = json_decode($json, true);

//print_r($data);

$set = [
    'name' => 'Łukasz',
    'surname' => 'Węgiel',
    'price' => 24,
];

$json = json_encode($set);

print_r($json);