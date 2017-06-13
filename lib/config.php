<?php

$config = [
    'shipment' => [
        1 => [
            'name' => 'Odbiór osobisty (0zł)',
            'price' => 0,
        ],
        2 => [
            'name' => 'Płatność przy odbiorze Paczkomaty (12 zł)',
            'price' => 12,
        ],
        3 => [
            'name' => 'Płatność przy odbiorze poczta polska (17 zł)',
            'price' => 17,
        ],
        4 => [
            'name' => 'Płatność przy odbiorze kurier DHL (20 zł)',
            'price' => 20,
        ],
        5 => [
            'name' => 'Przedpłata na konto (10 zł)',
            'price' => 10,
        ],


    ],
    'status' => [
        1 => [
            'name' => 'Zamówienie zostało złożone',
        ],
        2 => [
            'name' => 'Oczekuje na płatność',
        ],
        3 => [
            'name' => 'Zapłacone',
        ],
        4 => [
            'name' => 'Wysłane',
        ],
        5 => [
            'name' => 'Dostarczone',
        ],
    ],
];