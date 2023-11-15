<?php
namespace M2i\Mvc\Controller;

use M2i\Mvc\Database;
use M2i\Mvc\Model\Book;

use M2i\Mvc\View;


class BookController 
{
    public function list()
    {
       
        $books = (Book::all());
        return View::render('livres', ['books' => $books,
    ]);

    }
        public function show($id) 
        {
        
            if (!$books = Book::find($id)) {
                http_response_code(404);
                return View::render('404');
               }

         return View::render('livre', [
            'btitle' => $books['btitle'],
            'price' => $books['price'],
            'isbn' => $books['isbn'],
            'author' => $books['author'],
            'publishedAt' => $books['publishedAt'],
            'image' => $books['image'],
            'discount' => $books['discount'],
            'errors' => [],
         ]);
        }

        public function create()
        {
            // Récuper les données
            
            $book = new Book();
            // Récupérer les données
            $book->btitle = $_POST['btitle'] ?? null;
            $book->price = $_POST['price'] ?? null;
            $book->isbn = $_POST['isbn'] ?? null;
            $book->author = $_POST['author'] ?? null;
            $book->publishedAt = $_POST['publishedAt'] ?? null;
            $book->discount = $_POST['discount'] ?? null;
            $errors = [];
            
            // Vérifier les données
            if(!empty($_POST)){
            if (empty($book->btitle)) {
                $errors ['btitle'] = 'Le titre est invalide.';
            }
            
            if ($book->price < 1 || $book->price > 1000) {
                $errors['price'] = 'Le prix est invalide.';
            }
            
            if (!empty($book->discount) && ($book->discount > 100 || $book->discount < 0)) {
            $errors['discount'] = 'La promotion est invalide';
            }
            
            if (strlen($book->isbn) != 10 && strlen($book->isbn) != 13) {
            $errors['isbn'] = 'L\'ISBN doit contenir 10 ou 13 chiffres ';
            }
            
            if (empty($book->author)) {
                $errors ['author'] = 'L\'auteur est invalide.';
            }
            
            // Valider une date
            $checked = explode('-', $book->publishedAt); // [2023, 11 ,06]
            if (!checkdate($checked[1] ?? 0,$checked[2] ?? 0, (int) $checked[0])) {
            $errors['publishedAt'] = 'La date de publication doit être une date valide';
            }
            
            
            //@todo Vérifier le reste
                if (empty($errors)) {
                    //Faire un insert, redirection, message session ?
                    $book->save([
                        'btitle',
                        'price',
                        'isbn',
                        'discount',
                        'author',
                        'publishedAt',
                        'image',
                        
                    ]);
                    header('Location: /livres' );
            
                        // Message dans la session
                        // addMessage('Votre livre a bien été ajouté');
                        // Redirection
                        // redirect('livres.php');
                }
               
             
            }
            return View::render('create', [
                'book' => $book,
                'errors' => $errors,
            ]);
            
        }

        /**
 * Permet de récupérer un contact dans la BDD
 */


 public function updates()
 {
     
$book = new Book();
 
    $btitle = $_POST['btitle'] ?? null;
    $price = $_POST['price'] ?? null;
    $isbn = $_POST['isbn'] ?? null;
    $author = $_POST['author'] ?? null;
    $publishedAt = $_POST['publishedAt'] ?? null;
    $discount = $_POST['discount'] ?? null;
     $errors = [];
     
     // Vérifier les données
     if(!empty($_POST)){
     if (empty($btitle)) {
         return $btitle;
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
        return $author;
     }
     
     // Valider une date
     $checked = explode('-', $publishedAt); // [2023, 11 ,06]
     if (!checkdate($checked[1] ?? 0,$checked[2] ?? 0, (int) $checked[0])) {
     $errors['publishedAt'] = 'La date de publication doit être une date valide';
     }
     
     
     //@todo Vérifier le reste
         if (empty($errors)) {
             //Faire un insert, redirection, message session ?
             $book->update([
                 'btitle',
                 'price',
                 'isbn',
                 'discount',
                 'author',
                 'publishedAt',
                 'image',
                 
             ]);
             echo 'Votre Livre a bien été mis à jour.';
             header('Location: /livres' );
     
         }
        
      
     }
     return View::render('update', [
         'book' => $book,
         'errors' => $errors,
     ]);
     
 }



public function delete(int $id) {
    
    
    $query = Database::get()->prepare('DELETE FROM books WHERE id = :id');
    $query->execute(['id' => ($id)]);
    
   header('Location: /livres' );

}



}
