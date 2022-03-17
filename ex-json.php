<?php

$a = ["nom"=>"thomas","prenom"=>"digna","age"=>45,"pays_visites"=>["belgique","france","italie"]];

echo json_encode( $a ) . "\n";

class Personne{
    public $prenom;
    public $nom;
    public $age;
    public $paysVisites = [];

    /**
     * @param $prenom
     * @param $nom
     * @param $age
     * @param array $paysVisites
     */
    public function __construct($prenom, $nom, $age, array $paysVisites)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->age = $age;
        $this->paysVisites = $paysVisites;
    }


}

$personnes = [
    new Personne("Thomas","Digna",45,['chine','japon','corée']),
    new Personne("Barack", "Obama", 55,['usa','france','sri-lanka'])
];

$str = json_encode($personnes);

$res = json_decode( $str );
var_dump($res);