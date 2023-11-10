<?php

namespace M2i\Mvc\Controller;

use M2i\Mvc\View;

class UserController
{
    public function list()
    {
        $name = 'Fiorella';

        return View::render('list', [
            'name' => $name,
            'cars' => [1, 2, 3],
        ]);
    }
}
