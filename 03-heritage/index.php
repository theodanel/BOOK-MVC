<?php

require 'Animal.php';
require 'Cat.php';
require 'Tiger.php';
require 'Kennel.php';

$bianca = new Cat('Bianca');
echo $bianca->move().'<br>';
echo $bianca->climbsOnRoof().'<br>';
echo $bianca->baby().'<br>';
var_dump($bianca);

$sherkan = new Tiger('Sherkan', 'Bleu');
echo $sherkan->move().'<br>';
echo $sherkan->baby().'<br>';
var_dump($sherkan);

/**
 * On peut ajouter tout type d'animal
 * parce qu'on a le polymorphisme.
 */
$kennel = new Kennel();
$kennel->keep($bianca)->keep($sherkan);
$kennel->out();
