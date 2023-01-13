<?php
require_once "./classes/Movie.php";
require_once "./classes/Genre.php";

$genreMovie = new Genre(["Fantasy", "Action"]);


$firstMovie = new Movie("Pippo nel paese delle meraviglie", "ciaociao", "220", $genreMovie);

echo '<pre>';
echo '<h3>Film Completo</h3>'.'<br />';
print_r($firstMovie);
echo '</pre>';
?>