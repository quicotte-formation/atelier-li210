<?php

class Adresse
{
    public $rue;
    public $numero;
    public $zip;
    public $localite;

    public function affiche(){
        echo sprintf("Adresse: %d %s, %s : %s", $this->numero, $this->rue, $this->numero, $this->numero);
    }
}

























$adrExpedition = new Adresse();
$adrExpedition->localite="Sappey-en-Chartreuse";
$adrExpedition->numero=110;

$adrLivraison = new Adresse();
$adrLivraison->localite="Paris";

$adrExpedition->affiche();



