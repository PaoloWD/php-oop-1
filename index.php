<?php
require_once "./classes/Movie.php";
require_once "./classes/Genre.php";

$genreMovie = new Genre(
    [
        "Fantasy", "Azione"
    ]
    );
$xx=$genreMovie->getGeneres();

print_r($xx);

$firstMovie = new Movie("Pippo nel paese delle meraviglie", "ciaociao", "220", $xx);

print_r($firstMovie);

var_dump($firstMovie->getFilmGeneres());





?>