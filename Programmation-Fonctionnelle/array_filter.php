<?php


class Personne
{
    private $prenom;
    private $nom;

    public function __construct($prenom, $nom)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
    }

    public function __toString(): string
    {
        return sprintf("%s %s\n", $this->prenom, $this->nom);
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }


}

$fonctionFiltre = function (Personne $personneActuelle){

    return ! ( stristr($personneActuelle->getNom(),'k')==false );
};

$personnes = [
    new Personne("Lou", "Doyon"),
    new Personne("Klaus", "Kinski"),
    new Personne("Nastassia", "Kinski"),
    new Personne("Reggae", "Kinky"),
];

$lesK = array_filter($personnes,$fonctionFiltre);

var_dump($lesK);

