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

        $mina = new Cat();
        $mina->name = 'Mina';
        echo $mina->cry().'<br>';

        var_dump($bianca, $mina);
    ?>
</body>
</html>
