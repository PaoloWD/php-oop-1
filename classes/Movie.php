<?php
require_once __DIR__ . "/Genre.php";

class Movie{
    private $title;
    private $description;
    private $movie_duration;
    private $x;
   

    public function __construct($_title, $_description, $_movie_duration, $generes){
        $this->setTitle($_title);
        $this->setDescription($_description);
        $this->setMovie_duration($_movie_duration); 
        echo '<pre>';
        echo '$pp'.'<br />';
        print_r($generes);
        echo '</pre>';
        $this->x = $generes;

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

    public function getFilmGeneres(){
        return $this->x;
    }

  
    
   
}

 ?>