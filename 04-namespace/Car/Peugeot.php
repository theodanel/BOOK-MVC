<?php

namespace App\Car;

class Peugeot
{
    public function __construct()
    {
        // Attention dans une classe
        // avec namespace, les classes
        // globales doivent commencer par
        // un slash \
        $d = new \DateTime();
    }
}
