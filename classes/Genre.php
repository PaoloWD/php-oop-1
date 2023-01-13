<?php
class Genre{
    private $generes;

    public function __construct($generes){
        $this->setGeneres($generes);

    }


    public function getGeneres()
    {
        return $this->generes;
    }

    public function setGeneres($generes)
    {
        $this->generes = $generes;
   
    }
}
?>