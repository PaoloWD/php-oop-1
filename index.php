<?php
require_once "./classes/Movie.php";
require_once "./classes/Genre.php";

$genreMovie = new Genre("Fantasy", "Action");

var_dump($genreMovie);

$firstMovie = new Movie("Pippo nel paese delle meraviglie", "ciaociao", "220", $genreMovie);

var_dump($firstMovie);

var_dump($firstMovie->getGenre_1);
var_dump($firstMovie->getGenre_2);




?>