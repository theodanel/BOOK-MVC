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
