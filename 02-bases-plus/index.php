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

