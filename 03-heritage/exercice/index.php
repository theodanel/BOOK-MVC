<?php

require 'Character.php';
require 'Warrior.php';
require 'Magus.php';
require 'Hunter.php';

$aragorn = new Warrior('Aragorn');
$legolas = new Hunter('Legolas');
$gandalf = new Magus('Gandalf');

$aragorn->attack($legolas); // Enlève X points de vie en fonction de la force (Force x 2)
$legolas->rangedAttack($gandalf); // Enlève X points de vie si le personnage est chasseur (Force x 3)
$gandalf->castSpell($aragorn); // Enlève X points de vie en fonction du mana (Mana x 3)
