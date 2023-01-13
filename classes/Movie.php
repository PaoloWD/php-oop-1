<?php

require_once __DIR__ . "/Genre.php";

class Movie
{

    private $title;
    private $description;
    private $movie_duration;
    public $genres;
    

    public function __construct($_title, $_description, $_movie_duration, Genre $genres)
    {
        $this->setTitle($_title);
        $this->setDescription($_description);
        $this->setMovie_duration($_movie_duration);
        $this->setGenre($genres);
       
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    public function getMovie_duration()
    {
        return $this->movie_duration;
    }

    public function setMovie_duration($movie_duration)
    {
        $this->movie_duration = $movie_duration;

        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    public function getGenre()
    {
        return $this->genres;
    }

    public function setGenre($genre)
    {
        $this->genres = $genre;

        return $this;
    }

   public function random_vote(){
    return mt_rand(1, 5);
   }
}

?>