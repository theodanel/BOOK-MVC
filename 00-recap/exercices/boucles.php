<?php

// https://slides.com/matthieumota/php#/31

echo '<h1>Boucles</h1>';

for ($i = 10; $i >= 1; $i--) {
    echo $i.' --- ';
}

echo '<br>';

for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo $i.' --- ';
    }
}

echo '<br>';

echo '<h1>PGCD</h1>';

$number1 = 12;
$number2 = 96;
$a = $number1;
$b = $number2;

while ($a != $b) {
    if ($a > $b) {
        $a -= $b;
    } else {
        $b -= $a;
    }
}

echo "$a est le PGCD de $number1 et $number2";

echo '<br>';

echo '<h1>FizzBuzz</h1>';

// 1 & 1 => 01 et 01 donc 01
// 2 & 1 => 10 et 01 donc 00
// 3 & 1 => 11 et 01 donc 01
// 4 & 1 => 100 et 01 donc 00
// 5 & 1 => 101 et 01 donc 01

for ($i = 1; $i <= 100; $i++) {
    if ($i % 15 == 0) {
        echo 'FizzBuzz ___';
    } else if ($i % 3 == 0) {
        echo 'Fizz ___';
    } else if ($i % 5 == 0) {
        echo 'Buzz ___';
    } else {
        echo $i . ' ___ ';
    }
}

echo '<br>';

// https://slides.com/matthieumota/php#/32

echo '<h1>Boucles</h1>';

for ($i = 1; $i <= 10; $i++) {
    echo '🎃';
}

echo '<br><br>';

for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        echo '🎃';
    }
    echo '<br>';
}

echo '<br>';

for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo '🎃';
    }
    echo '<br>';
}

// https://slides.com/matthieumota/php#/33

$table = 5;
echo "<h1>Table de $table</h1>";

for ($i = 0; $i <= 10; $i++) {
    echo "$i x $table = ".$i * $table.'<br>';
}

for ($table = 0; $table <= 10; $table++) {
    echo "<h1>Table de $table</h1>";

    for ($i = 0; $i <= 10; $i++) {
        echo "$i x $table = ".$i * $table.'<br>';
    }
}
