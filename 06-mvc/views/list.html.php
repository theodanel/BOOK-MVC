<?php require 'partials/header.html.php'; ?>
    <h1>Hello <?= $name; ?> !</h1>

    <ul>
        <?php foreach ($cars as $car) { ?>
            <li><?= $car; ?></li>
        <?php } ?>
    </ul>

    <ul>
        <?php foreach ($users as $user) { ?>
            <li><?= $user['name']; ?></li>
        <?php } ?>
    </ul>
<?php require 'partials/footer.html.php'; ?>
