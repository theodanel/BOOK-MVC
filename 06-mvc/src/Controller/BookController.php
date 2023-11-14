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
            'title' => $books['title'],
            'price' => $books['price'],
            'isbn' => $books['isbn'],
            'author' => $books['author'],
            'publishedAt' => $books['publishedAt'],
            'image' => $books['image'],
            'discount' => $books['discount'],
         ]);
        }

        public function create()
        {
            // Récuper les données
            $book = new Book();
            $book->name = $_POST['name'] ?? null;
            $errors = [];

            if(! empty($_POST)) {
                if(empty($book->name)) {
                    $errors['name'] = 'Le nom est invalide.';
                }
                
                if(empty($errors)) {
                    // Dans le save, on met le nom des colonnes de la table
                    $book->save(['name']);
                    // View : redirect ('.utilisateurs')
                }
             
            }
            return View::render('create', [
                'errors' => $errors,
                'name' => $book,
            ]);
        }

        /**
 * Permet de récupérer un contact dans la BDD
 */

public function delete(int $id) {
    
    
    $query = Database::get()->prepare('DELETE FROM books WHERE id = :id');
    $query->execute(['id' => ($id)]);
    
   header('Location: /livres' );

}



}
