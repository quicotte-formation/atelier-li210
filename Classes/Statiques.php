<?php

class BoiteAOutils{

    public static function visser($txt){}
    static public function clouer(){}
    static public function scier(){}
}

class Employe{

    private $prenom;
    private $nom;
    private $fonction;
    private static $nbInstances = 0;

    public function __construct()
    {
        Employe::$nbInstances++;
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

    /**
     * @return mixed
     */
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * @param mixed $fonction
     */
    public function setFonction($fonction): void
    {
        $this->fonction = $fonction;
    }

    /**
     * @return int
     */
    public static function getNbInstances(): int
    {
        return self::$nbInstances;
    }
}

new Employe();new Employe();new Employe();
echo Employe::getNbInstances();

BoiteAOutils::scier();

