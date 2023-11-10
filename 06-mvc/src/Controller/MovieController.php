<?php

namespace M2i\Mvc\Controller;

use M2i\Mvc\Model\Movie;
use M2i\Mvc\View;

class MovieController
{
    public function list()
    {
        $title = 'Films';
        $movies = Movie::all();
        // @todo le stagiaire a oublié un moyen d'afficher la durée du film au format 1h31 pour 91.

        // & permet de faire une référence entre movie et movies
        // On modifie le tableau et pas une copie
        foreach ($movies as &$movie) {
            // Solution qui ne marche que pour 24h max
            // $movie['duration'] = date('H\hi', $movie['duration'] * 60);
            $hours = floor($movie['duration'] / 60);
            $minutes = $movie['duration'] % 60;
            if ($minutes < 10) {
                $minutes = '0'.$minutes;
            }
            $movie['duration'] = $hours.'h'.$minutes;
        }

        return View::render('movies/list', [
            'title' => $title,
            'movies' => $movies,
        ]);
    }
}
