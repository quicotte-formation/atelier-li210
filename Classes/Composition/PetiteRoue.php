<?php

class PetiteRoue
{
    private $jour = 1;

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
        if( $this->jour > 10 or $this->jour<1 ){
            $this->jour = 1;
        }
    }

    public function avanceDUnJour(){

        $this->jour ++ ;
        if( $this->jour > 10 ){
            $this->jour = 1;
        }
    }
}