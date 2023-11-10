<?php

namespace M2i\Mvc\Controller;

use M2i\Mvc\View;

class MovieController
{
    public function list()
    {
        $title = 'Films';
        $movies = [
            [
                'id' => 1,
                'title' => 'Shrek Forever After',
                'duration' => 93,
                'image' => 'https://image.tmdb.org/t/p/original/6HrfPZtKcGmX2tUWW3cnciZTaSD.jpg',
            ],
            [
                'id' => 2,
                'title' => 'Planes',
                'duration' => 91,
                'image' => 'https://image.tmdb.org/t/p/original/9uqCaPEIep4iBG3U4AqSP20LGjq.jpg',
            ],
            [
                'id' => 3,
                'title' => 'La Pat\' Patrouille',
                'duration' => 85,
                'image' => 'https://image.tmdb.org/t/p/original/iuEmUPqigSBFdu8vRZvVA4parQg.jpg',
            ],
            [
                'id' => 4,
                'title' => 'Gran Turismo',
                'duration' => 95,
                'image' => 'https://image.tmdb.org/t/p/original/vRIHkkuI6FKqUHPJbABbNLRM3VI.jpg',
            ],
        ];
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
