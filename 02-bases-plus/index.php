<?php

require 'Person.php';

$fiorella = new Person('Fiorella', '2019-12-31');
$toto = new Person('Toto', '2020-01-01');

echo $fiorella->name.' a '.$fiorella->age().' ans<br>';
echo $toto->name.' a '.$toto->age().' ans<br>';

// Pour remplir le tableau d'ami
$fiorella->becomeFriend($toto); ?>

<p>Les amis de <?= $fiorella->name; ?>:</p>
<ul>
    <?php foreach ($fiorella->friends() as $friend) { ?>
        <li><?= $friend->name; ?>, il a <?= $friend->age(); ?> ans</li>
    <?php } ?>
</ul>

<h1>Exercice Librairie</h1>

<?php

require 'Book.php';

$b = new Book('Harry Potter à l\'école des sorciers', 2);
echo 'On est sur la page '.$b->page().' <br>'; // 1
$b->nextPage()->nextPage()->nextPage(); // tourne la page (ne fait rien si on est sur la dernière page)
echo 'On est sur la page '.$b->page().' <br>'; // 2
$b->close(); // ferme le livre (reviens à la page 1)
echo 'On est sur la page '.$b->page().' <br>';
echo 'Le livre est '.$b->getName().'. '; // Récupère le nom du livre
echo 'Il a '.$b->countPages().' pages. <br>'; // Récupère le nombre de pages

require 'Library.php';

$l = new Library();
$l->addBook($b); // Ajoute le livre b dans un tableau
$l->addBooks([ // Ajoute les livres suivant dans un tableau
    new Book('Chambre des secrets', 300),
    new Book('Prisonnier d\'Azkaban', 400),
    new Book('Coupe de feu', 500),
]);
?>

<h2>Notre bibliothèque contient <?= $l->count(); ?> livres :</h2>
<ul>
    <?php foreach ($l->books() as $book) { ?>
        <li><?= $book->getName(); ?></li>
    <?php } ?>
</ul>

<h3>Nos livres représentent un total de <?= $l->totalPages(); ?> pages.</h3>

<h3>On cherche le livre : Coupe de feu</h3>
<p></p>

<h3>On cherche les livres commençant par C</h3>
<p></p>

<h3>On cherche un livre aléatoire</h3>
<p></p>
