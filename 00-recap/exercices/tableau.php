<?php

$books = []; // Tableau vide (1 dimension)
$books1 = ['a', 'b', 'c']; // Tableau numérique (1 dimension)
$books2 = [
    'a' => 1,
    'b' => 2,
    'c' => 3,
]; // Tableau associatif (1 dimension)

// Comment on peut afficher b ?
$books1[1]; // b

// Comment on peut afficher 2 ?
$books2['b'];

// Comment on peut parcourir le tableau $books2 ? foreach, while, for
foreach ($books2 as $index => $book) {
    echo $book.'-'.$index; // 1-a
}

// Tableau à 3 dimensions
$cars = [
    [
        'brand' => 'Porsche',
        'model' => 'Panamera S',
        'color' => 'Noir',
        'options' => ['Sièges chauffants', 'Toit ouvrant'],
    ],
    [
        'brand' => 'Peugeot',
        'model' => '308',
        'color' => 'Bleue',
        'options' => [],
    ],
];

// Comment afficher Toit ouvrant ?
$cars[0]['options'][1];

foreach ($cars as $car) {
    
}
