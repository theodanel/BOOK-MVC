<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body>
    <div class="max-w-5xl mx-auto px-3">
        <h1 class="text-center font-bold text-3xl py-5">Nos films</h1>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
            <?php foreach ($movies as $movie) { ?>
                <div>
                    <h2 class="text-center font-bold text-lg"><?= $movie['title']; ?></h2>
                    <p class="text-center">Durée: <strong><?= $movie['duration']; ?></strong></p>
                    <img class="w-full h-[350px] object-cover" src="<?= $movie['image']; ?>" alt="<?= $movie['title']; ?>">
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>
