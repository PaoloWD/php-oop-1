<?php
class Genre{
    private $genre;

    public function __construct($_genre){
        $this->setGenre($_genre);
    }


    public function getGenre()
    {
        return $this->genre;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

}
?>