<?php
    require 'data.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?> - Book PHP</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body class="font-[Ubuntu]">
    <div class="max-w-5xl mx-auto px-3 mb-8">
        <div class="flex justify-between items-center py-6 border-b">
            <h2 class="text-3xl">
                <a href="/">Book PHP</a>
            </h2>
            <ul>
                <li>
                    <a class="px-4" href="/">Accueil</a>
                    <a class="px-4" href="/books">Livres</a>
                    <a class="px-4" href="/cart">Panier (0)</a>
                    <a class="px-4" href="/login">Connexion</a>
                    <a class="px-4" href="/a-propos">A propos</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="max-w-5xl mx-auto px-3">
        <div class="lg:flex items-center">
            <div class="lg:w-1/2">
                <img class="rounded-lg max-w-full mx-auto mb-12" src="<?= $image; ?>" alt="<?= $title; ?>">
            </div>
            <div class="lg:w-1/2">
                <h1 class="text-center text-2xl font-bold"><?= $title; ?></h1>

                <div class="flex items-center justify-between my-10">
                    <div>
                        <p class="text-4xl font-bold"><?= price($price, $discount); ?> €</p>
                        <?php if ($discount > 0) { ?>
                        <p class="text-lg font-bold">-<?= $discount; ?>% <span class="line-through"><?= price($price); ?> €</span></p>
                        <?php } ?>
                    </div>
                    <div class="text-lg text-gray-900">
                        <p>
                            Par <strong><?= $author; ?></strong>
                        </p>
                        <p>
                            <?php // strtotime('1991-11-18'); ?>
                            Publié le <?= date('d/m/Y', strtotime($publishedAt)); ?>
                        </p>
                    </div>
                </div>

                <p class="text-xl text-center text-gray-900">
                    ISBN: <strong>8-248827-583739</strong>
                </p>

                <div class="text-center mt-12">
                    <a class="bg-gray-900 px-4 py-2 text-white inline-block rounded hover:bg-gray-700 duration-200" href="/cart/1/add">
                        Ajouter au panier
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-5xl mx-auto py-8 mt-8">
        <p class="text-center">Copyright &copy; <?= date('Y'); ?></p>
    </div>
</body>
</html>
