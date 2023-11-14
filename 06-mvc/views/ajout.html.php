<?php 


 require 'partials/header.html.php';


$title = 'Ajouter un livre'; // Changer le titre de la page

// Récupérer les données
$btitle = $_POST['title'] ?? null;
$price = $_POST['price'] ?? null;
$discount = $_POST['discount'] ?? null;
$isbn = $_POST['isbn'] ?? null;
$author = $_POST['author'] ?? null;
$publishedAt = $_POST['publishedAt'] ?? null;
$errors = [];

// Vérifier les données
if(!empty($_POST)){
if (empty($btitle)) {
    $errors ['title'] = 'Le titre est invalide.';
}

if ($price < 1 || $price > 1000) {
    $errors['price'] = 'Le prix est invalide.';
}

if (!empty($discount) && ($discount > 100 || $discount < 0)) {
$errors['discount'] = 'La promotion est invalide';
}

if (strlen($isbn) != 10 && strlen($isbn) != 13) {
$errors['isbn'] = 'L\'ISBN doit contenir 10 ou 13 chiffres ';
}

if (empty($author)) {
    $errors ['author'] = 'L\'auteur est invalide.';
}

// Valider une date
$checked = explode('-', $publishedAt); // [2023, 11 ,06]
if (!checkdate($checked[1] ?? 0,$checked[2] ?? 0, (int) $checked[0])) {
$errors['publishedAt'] = 'La date de publication doit être une date valide';
}


//@todo Vérifier le reste
    if (empty($errors)) {
        //Faire un insert, redirection, message session ?
        insert('INSERT INTO books(title, price, discount, isbn, author, publishedAt, image)
                VALUES (?,?,?,?,?,?,?)', 
                [htmlspecialchars($btitle),
                $price,
                empty($discount) ? null : $discount,
                $isbn,
                htmlspecialchars($author),
                $publishedAt,
                'uploads/06.jpg',
                ] );

            // Message dans la session
            addMessage('Votre livre a bien été ajouté');
            // Redirection
            redirect('livres.php');
    }
}
require 'C:\wamp64\www\php-recap\PHP OBJET poo\00-php fil rouge\00-recap\00-recap\partials\header.php';
?>


    <div class="max-w-5xl mx-auto px-3">
        <?php var_dump($errors); ?>
 
        <?php if (!empty ($errors)) { ?>
        <div class="bg-red-300 p-5 rounded border border-red-800 text-red-800 my-4">
            <?php foreach ($errors as $error ) { ?>
                <p> <?= $error; ?> </p>
            <?php } ?>   
        </div>
        <?php } ?>
        <form action="" method="post" class="w-1/2 mx-auto" enctype="multipart/form-data">
            <div class="mb-4">
                <label for="title" class="block">Titre *</label>
                <input type="text" name="title" id="title" class="border-0 border-b focus:ring-0 w-full" value="<?=$btitle; ?> ">
            </div>
            <div class="mb-4">
                <label for="price" class="block">Prix *</label>
                <input type="text" name="price" id="price" class="border-0 border-b focus:ring-0 w-full" value="<?=$price; ?> ">
            </div>
            <div class="mb-4">
                <label for="discount" class="block">Promotion</label>
                <input type="text" name="discount" id="discount" class="border-0 border-b focus:ring-0 w-full" value="<?=$discount; ?> ">
            </div>
            <div class="mb-4">
                <label for="isbn" class="block">ISBN *</label>
                <input type="text" name="isbn" id="isbn" class="border-0 border-b focus:ring-0 w-full" value="<?=$isbn; ?> ">
            </div>
            <div class="mb-4">
                <label for="author" class="block">Auteur *</label>
                <input type="text" name="author" id="author" class="border-0 border-b focus:ring-0 w-full" value="<?=$author; ?> ">
            </div>
            <div class="mb-4">
                <label for="published_at" class="block">Publié le *</label>
                <input type="date" name="publishedAt" id="published_at" class="border-0 border-b focus:ring-0 w-full" value= "<?=$publishedAt; ?> " >
            </div>
            <div class="mb-4">
                <label for="image" class="block mb-2">Image *</label>
                <input type="file" name="image" id="image" class="cursor-pointer w-full
                    file:rounded-full file:border-0 file:cursor-pointer
                    file:bg-blue-50 hover:file:bg-blue-100
                    file:font-semibold file:py-2 file:px-4 file:mr-4
                ">
            </div>

            <div class="text-center">
                <button class="bg-gray-900 px-4 py-2 text-white inline-block rounded hover:bg-gray-700 duration-200">Créer</button>
            </div>
        </form>
    </div>

    <?php 
 require 'partials/footer.html.php'; ?>


