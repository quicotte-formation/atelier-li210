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

$fonction_transfo = function (Personne $p) {
    return sprintf("Prénom: %s Nom: %s\n",$p->getPrenom(), $p->getNom());
};

$personnes = [
    new Personne("Lou", "Doyon"),
    new Personne("Klaus", "Kinski"),
    new Personne("Nastassia", "Kinski"),
    new Personne("Reggae", "Kinky"),
];

$tabStrings = array_map($fonction_transfo, $personnes);

foreach ($tabStrings as $str) {
    echo $str;
}
