<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC</title>
</head>
<body>
    <h1>Hello <?= $name; ?> !</h1>

    <ul>
        <?php foreach ($cars as $car) { ?>
            <li><?= $car; ?></li>
        <?php } ?>
    </ul>
</body>
</html>
