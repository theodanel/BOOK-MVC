<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'MVC'; ?></title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body>
    <div class="bg-gray-800 py-5 shadow-xl">
        <div class="max-w-5xl mx-auto px-3">
            <div class="flex justify-between items-center text-gray-200">
                <h1 class="text-2xl">
                    <a href="/">MVC</a>
                </h1>
                <nav class="space-x-3">
                    <a href="/utilisateurs">Utilisateurs</a>
                    <a href="/films">Films</a>
                </nav>
            </div>
        </div>
    </div>
