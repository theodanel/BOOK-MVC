<?php

// https://slides.com/matthieumota/php#/25

echo '<h1>Majeur</h1>';

$age = 16;

// 1ère version
if ($age >= 18) {
    echo 'Vous pouvez entrer';
} else {
    echo 'Interdit';
}

echo '<br>';

// 2ème version
if ($age >= 18) {
    echo 'Vous pouvez entrer';
} else if ($age >= 16) {
    echo 'Vous êtes presque majeur';
} else if ($age >= 14) {
    echo 'Vous êtes jeune';
} else {
    echo 'Vous êtes trop jeune';
}

echo '<br>';

// https://slides.com/matthieumota/php#/26
echo '<h1>Opérations</h1>';

$number1 = 15;
$number2 = 5;
$number3 = 8;

$result1 = $number1 + $number2 + $number3;
$result2 = $number1 * ($number3 - $number2);
$result3 = round(($number3 + $number2) / $number1, 2);

echo "$number1 + $number2 + $number3 = $result1 <br>";
echo "$number1 x ($number3 - $number2) = $result2 <br>";
echo "($number3 + $number2) / $number1 = $result3 <br>";

if ($result1 < 20 || $result2 < 20 || $result3 < 20) {
    echo 'Une des opérations renvoie moins de 20';
}
