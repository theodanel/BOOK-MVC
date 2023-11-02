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
    echo $book.'-'.$index.'<br>'; // 1-a
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

foreach ($cars as $car) {
    echo $car['brand'].' '.$car['model'].'<br>';
    echo 'Sa couleur est '.$car['color'].'<br>';
    echo count($car['options']).' options <br>';
    foreach ($car['options'] as $option) {
        echo '- '.$option.'<br>';
    }
    echo '------------------ <br>';
}

// Comment afficher Toit ouvrant ?
$cars[0]['options'][1];

// Exercice capitales
$capitales = [
    'France' => 'Paris',
    'Espagne' => 'Madrid',
    'Italie' => 'Rome',
];

foreach ($capitales as $country => $capital) {
    echo "La capitale de $country est $capital. <br>";
}

// Exercice population
$population = [
    'France' => 67595000,
    'Suede' => 9998000,
    'Suisse' => 8417000,
    'Kosovo' => 1820631,
    'Malte' => 434403,
    'Mexique' => 122273500,
    'Allemagne' => 82800000,
];

// 1
echo 'Les pays ayant + de 20M de personnes : <br>';
foreach ($population as $country => $pop) {
    if ($pop > 20 * 10 ** 6) {
        echo $country . '<br>';
    }
}

$population = [
    'France' => 67595000,
    'Suede' => 9998000,
    'Suisse' => 8417000,
    'Kosovo' => 1820631,
    'Malte' => 434403,
    'Mexique' => 122273500,
    'Allemagne' => 82800000,
];

// 2
$total = 0;
foreach ($population as $country => $pop) {
    if ($country != 'Mexique') {
        $total += $pop;
    }
}
echo 'La population totale est '.$total;
