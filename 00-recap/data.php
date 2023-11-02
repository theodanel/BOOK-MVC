<?php

$title = 'Quae dolor itaque natus reiciendis ad quae.';
$price = 38; // sans taxes
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

/**
 * Permet de formater un ISBN.
 * 8248827583739 => 8-248827-583739
 * 8248827583    => 8-2488-2758-3
 */
function isbn($numbers) {
    $result = substr($numbers, 0, 1); // 8

    if (strlen($numbers) === 13) {
        $result = $result.'-'.substr($numbers, 1, 6); // 8-248827
        $result = $result.'-'.substr($numbers, 7, 6); // 8-248827-583739
    } else {
        $result .= '-'.substr($numbers, 1, 4);
        $result .= '-'.substr($numbers, 5, 4);
    }

    return $result;
}
