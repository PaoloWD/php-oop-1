<?php
class Genre{
    private $genre_1;
    private $genre_2;

    public function __construct($_genre_1, $_genre_2){
        $this->setGenre_1($_genre_1);
        $this->setGenre_2($_genre_2);
    }


    public function getGenre_1()
    {
        return $this->genre_1;
    }

    public function setGenre_1($genre_1)
    {
        $this->genre_1 = $genre_1;

        return $this;
    }

    public function getGenre_2()
    {
        return $this->genre_2;
    }

    public function setGenre_2($genre_2)
    {
        $this->genre_2 = $genre_2;

        return $this;
    }
}
?>