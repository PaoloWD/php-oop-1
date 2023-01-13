<?php
require_once __DIR__ . "/Genre.php";

class Movie{
    private $title;
    private $description;
    private $movie_duration;
    private $genre_1;
    private $genre_2;

    public function __construct($_title, $_description, $_movie_duration, Genre $_genre_1, Genre $_genre_2){
        $this->setTitle($_title);
        $this->setDescription($_description);
        $this->setMovie_duration($_movie_duration);
        $this->setGenre_1($_genre_1);
        $this->setGenre_2($_genre_2);
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

    public function getGenre_1()
    {
        return $this->genre_1;
    }
    
      public function setGenre_1(Genre $genre_1) {
        $this->genre_1 = $genre_1;
    
        return $this;
      }

      public function getGenre_2()
      {
          return $this->genre_2;
      }
      
        public function setGenre_2(Genre $genre_2) {
          $this->genre_2 = $genre_2;
      
          return $this;
        }
}

 ?>