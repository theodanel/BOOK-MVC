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
echo 'La population totale est '.$total.'<br>';

// Exercices élèves
$eleves = [
    0 => [
        'nom' => 'Matthieu',
        'notes' => [10, 8, 16, 2, 17, 16, 15, 2]
    ],
    1 => [
        'nom' => 'Thomas',
        'notes' => [4, 18, 12, 15, 13, 7]
    ],
    2 => [
        'nom' => 'Jean',
        'notes' => [17, 14, 6, 2, 16, 18, 9]
    ],
    3 => [
        'nom' => 'Enzo',
        'notes' => [1, 14, 6, 2, 1, 8, 9]
    ]
];

// 1/ Afficher la liste de tous les éléves avec leurs notes.
foreach ($eleves as $eleve) {
    echo $eleve['nom'].' a eu ';

    foreach ($eleve['notes'] as $index => $note) {
        echo $note;

        if ($index < count($eleve['notes']) - 2) { // "," partout sauf le dernier et avant dernier
            echo ', ';
        } else if ($index < count($eleve['notes']) - 1) { // "et" sur le dernier
            echo ' et ';
        }
    }

    echo '<br>';
}

// 2/ Calculer la moyenne de Jean. On part de $eleves[2]['notes']
$sum = 0;
foreach ($eleves[2]['notes'] as $note) {
    $sum += $note;
}
$average = $sum / count($eleves[2]['notes']);
echo 'La moyenne de Jean est '.round($average, 2).'<br>';

$average = array_sum($eleves[2]['notes']) / count($eleves[2]['notes']);
echo 'La moyenne de Jean est '.round($average, 2).'<br>';

// 3/ Combien d'élèves ont la moyenne ?
$total = 0;
foreach ($eleves as $eleve) {
    $average = array_sum($eleve['notes']) / count($eleve['notes']);

    if ($average > 10) {
        $total++; // $total = $total + 1;
        echo $eleve['nom'].' a la moyenne <br>';
    } else {
        echo $eleve['nom'].' n\'a pas la moyenne <br>';
    }
}
echo "Nombre d'élèves avec la moyenne: $total <br>";

// 4/ Quel(s) éléve(s) a(ont) la meilleure note ?
$max = 0;
foreach ($eleves as $eleve) {
    foreach ($eleve['notes'] as $note) {
        if ($note > $max) {
            $max = $note;
        }
    }
}

foreach ($eleves as $eleve) {
    // Est-ce que la note max est dans les notes de l'élève ?
    if (in_array($max, $eleve['notes'])) {
        echo $eleve['nom'].' a la meilleure note: '.$max.' <br>';
    }
}


// 5/ Qui a eu au moins un 20 ?
$hasTwenty = false;
foreach ($eleves as $eleve) {
    foreach ($eleve['notes'] as $note) {
        if ($note == 20) {
            $hasTwenty = true;
            break 2; // On arrête les 2 foreach
        }
    }
}

if ($hasTwenty) {
    echo "Quelqu'un a eu 20";
} else {
    echo "Personne n'a eu 20";
}
