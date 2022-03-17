<?php

include_once "Personne.php";

class Passager extends Personne
{
    private $numPasseport;

    public function __construct($pre, $no,$pass)
    {
        $this->nom = $no;
        $this->prenom = $pre;
    }

    public function affiche(){
        $this->getPrenom() . $this->getNom();
    }

    /**
     * @return mixed
     */
    public function getNumPasseport()
    {
        return $this->numPasseport;
    }

    /**
     * @param mixed $numPasseport
     */
    public function setNumPasseport($numPasseport): void
    {
        $this->numPasseport = $numPasseport;
    }

    public function __toString()
    {
        return "coucou";
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return "C PERSO";
    }
}

new Passager();

