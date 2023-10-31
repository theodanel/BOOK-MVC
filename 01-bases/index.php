<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>
<body>
    <?php
        require 'Cat.php';

        // Un objet ou une instance de la classe Cat
        $bianca = new Cat();
        $bianca->name = 'Bianca';
        $bianca->type = 'Chat de gouttière';
        $bianca->setFur('BLANC')
            ->setFur('BLEU');

        echo 'Mon chat se nomme '.$bianca->name.'<br>';
        echo $bianca->cry().'<br>';
        echo 'Mon chat est '.$bianca->getFur().'<br>';

        $mina = new Cat('Mina', 'Chartreux');
        //$mina->name = 'Mina';
        echo $mina->cry().'<br>';

        var_dump($bianca, $mina);

        // Exercice Car
        require 'Car.php';

        $car1 = new Car('BMW', 'Serie 1');
        echo $car1->drive().'<br>';
        echo $car1->klaxon().'<br>';
        var_dump($car1);
        $car1->repaint('Jaune');
        var_dump($car1);

        $car2 = new Car('Ferrari', '360 Modena', 'Rouge');
        echo $car2->drive().'<br>';
        echo $car2->klaxon().'<br>';
        while ($car2->hasFuel()) {
            echo $car2->drive().'<br>';
        }
        var_dump($car2);
    ?>
</body>
</html>
