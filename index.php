<?php
require_once "./classes/Movie.php";
require_once "./classes/Genre.php";

$genreMovie = new Genre(
    [
        "Fantasy", "Azione"
    ]
    );
$xx=$genreMovie->getGeneres();

echo '<pre>';
echo '$pp'.'<br />';
print_r($xx);
echo '</pre>';

$firstMovie = new Movie("Pippo nel paese delle meraviglie", "ciaociao", "220", $xx);

echo '<pre>';
echo '$pp'.'<br />';
print_r($firstMovie);
echo '</pre>';

echo '<pre>';
echo '$pp'.'<br />';
print_r($firstMovie->getFilmGeneres());
echo '</pre>';




?>