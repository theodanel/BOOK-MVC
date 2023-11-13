<?php

namespace M2i\Mvc\Controller;

use M2i\Mvc\Model\User;
use M2i\Mvc\View;

class UserController
{
    public function list()
    {
        $name = 'Fiorella';

        $users = User::all();
        
        return View::render('list', [
            'name' => $name,
            'cars' => [1, 2, 3],
            'users' => $users,
        ]);
    }

    public function show($id)
    {
        $user = User::find($id);

        if (! $user) {
            http_response_code(404);
            return View::render('404');
        }

        return View::render('show', [
            'user' => $user,
        ]);
    }

    public function create()
    {
        // Récup les données
        $user = new User();
        $user->name = $_POST['name'] ?? null;
        $errors = [];

        if (! empty($_POST)) {
            if (empty($user->name)) {
                $errors['name'] = 'Le nom est invalide.';
            }

            if (empty($errors)) {
                // Dans le save, on met le nom des
                // colonnes de la table
                $user->save(['name']);

                // View::redirect('/utilisateurs');
            }
        }

        return View::render('create', [
            'errors' => $errors,
            'user' => $user,
        ]);
    }
}
