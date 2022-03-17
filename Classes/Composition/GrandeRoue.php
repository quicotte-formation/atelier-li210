<?php

require_once "PetiteRoue.php";

class GrandeRoue
{
    private $petiteRoue;
    private $jour;

    public function __construct()
    {
        $this->jour = 1;
        $this->petiteRoue = new PetiteRoue();
    }

    /**
     * @return int
     */
    public function getJour(): int
    {
        return $this->jour;
    }

    /**
     * @param int $jour
     */
    public function setJour(int $jour): void
    {
        $this->jour = $jour;
        if( $this->jour>30 or $this->jour<1 ){
            $this->jour = 1;
        }
    }

    public function avance1Jour(){
        $this->setJour( $this->jour+1 );
        $this->petiteRoue->avanceDUnJour();
    }

    /**
     * @return PetiteRoue
     */
    public function getPetiteRoue(): PetiteRoue
    {
        return $this->petiteRoue;
    }

    public function __toString(){
        echo "__toString\n";
        return sprintf("Grande roue:%d jours , Petite roue:%d jours\n",
            $this->jour,
            $this->petiteRoue->getJour());
    }
}

$maGrandeRoue = new GrandeRoue();

$maGrandeRoue->avance1Jour();
(string) $maGrandeRoue;
