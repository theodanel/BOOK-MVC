<?php

$title = 'Quae dolor itaque natus reiciendis ad quae.';
$price = 150.147; // sans taxes
$discount = 19;
$isbn = '8248827583739'; // ISBN 13 ou 10 non formaté 2-7654-1005-4 ou 2-765412-005123
$author = 'Denise-Sabine Bernard';
$publishedAt = '2014-08-18';
$image = 'uploads/06.jpg';

/**
 * Permet de calculer un prix TTC.
 */
function price($preTaxPrice, $percentage = 0) {
    $taxPrice = $preTaxPrice * (1 + 20 / 100) * (1 - $percentage / 100); // 45.6
    $taxPrice = number_format($taxPrice, 2, ',', ' '); // 1450.6 devient 1 450,60

    return $taxPrice;
}
