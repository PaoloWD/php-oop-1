<?php
require_once "./classes/Movie.php";
require_once "./classes/Genre.php";

$genreMovie_1 = new Genre(["Fantasy", "Action"]);
$genreMovie_2 = new Genre(["Storia Vera", "Dramma"]);


$firstMovie = new Movie("Pippo nel paese delle meraviglie", "ciaociao", "220", $genreMovie_1);

$secondMovie = new Movie("Paolo nel paese dei bonus", "Paolo parte sempre dai bonus per poi dimenticarsi di fare le milestone", "una vita", $genreMovie_2);

echo '<pre>';
echo '<h3>Film Completo 1</h3>'.'<br />';
print_r($firstMovie);
echo '</pre>';

echo '<pre>';
echo '<h3>Film Completo 2</h3>'.'<br />';
print_r($secondMovie);
echo '</pre>';
?>