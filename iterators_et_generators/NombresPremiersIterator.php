<?php

class NombresPremiersIterator implements Iterator
{
    private $nombres=[1,2,3,5,7,9,11];
    private $indiceAct = 0;

    public function current()// Renvoie elem actuel
    {
        return $this->nombres[$this->indiceAct];
    }
    public function next()// Passe à la position suivante
    {
        $this->indiceAct++;
    }
    public function key()// Renvoie la position actuelle
    {
        return $this->indiceAct;
    }
    public function valid()// Renvoie si on est après la fin
    {
        return $this->indiceAct < count($this->nombres);
    }
    public function rewind()// Revient au début
    {
        $this->indiceAct=0;
    }
}

$nombreIterator = new NombresPremiersIterator();
foreach($nombreIterator as $nombre){
    echo $nombre . "\n";
}

$nombreIterator->rewind();
