<?php

class Horloge{
    private $heure=0;
    private $min=0;
    private $sec=0;

    /**
     * @return int
     */
    public function getMin(): int
    {
        return $this->min;
    }

    /**
     * @param int $min
     */
    public function setMin(int $min): void
    {
        $this->min = $min;
    }

    /**
     * @return int
     */
    public function getSec(): int
    {
        return $this->sec;
    }

    /**
     * @param int $sec
     */
    public function setSec(int $sec): void
    {
        $this->sec = $sec;
    }

    public function getHeure(){
        return $this->h;
    }

    public function setHeure($heure){
        $this->h = $heure;
    }

    public function affiche(){
        echo sprintf("%d:%d:%d\n",$this->heure,$this->min,$this->sec);
    }
}

$monHorloge = new Horloge();
$monHorloge->setH(26);
$monHorloge->affiche();
