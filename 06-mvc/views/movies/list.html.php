<?php require __DIR__.'/../partials/header.html.php'; ?>
    <div class="max-w-5xl mx-auto px-3">
        <h1 class="text-center font-bold text-3xl py-5">Nos films</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
            <?php foreach ($movies as $movie) { ?>
                <div>
                    <h2 class="text-center font-bold text-lg"><?= $movie['title']; ?></h2>
                    <p class="text-center">Durée: <strong><?= $movie['duration']; ?></strong></p>
                    <img class="w-full h-[350px] object-cover" src="<?= $movie['image']; ?>" alt="<?= $movie['title']; ?>">
                </div>
            <?php } ?>
        </div>
    </div>
<?php require __DIR__.'/../partials/footer.html.php'; ?>
