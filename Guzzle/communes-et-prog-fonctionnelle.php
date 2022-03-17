<?php

require_once "vendor/autoload.php";

# Configuration API cible
$cli = new \GuzzleHttp\Client([ 'base_uri'=>'https://geo.api.gouv.fr/',
                                'verify'=>false,
                                'curl'=>[CURLOPT_SSL_VERIFYPEER=>false] ]);
$reponse = $cli->request('GET', 'communes', ['query' =>[
    'codeDepartement' => 23
]]);

$communesStr = $reponse->getBody();
$communes = json_decode( $communesStr );

// Filtre communes de - 100 habitants
$fonctionFiltre = function($commune){
  return $commune->population <100;
};
$communes = array_filter($communes, $fonctionFiltre);

// TRI par population croissante
$fonctionDeTri = function ($commune1, $commune2){

    if($commune1->population < $commune2->population ){
        return -1;
    }elseif ($commune1->population > $commune2->population){
        return 1;
    }else{
        return 0;
    }
};
usort($communes,$fonctionDeTri);

// TRANSFORMATION

/**
 * Renvoyer: Nom:  Pop:
 * @param $commune
 */
$fonctionDeTransfo = function ($commune){
    return sprintf("Nom:%s Pop:%d\n", $commune->nom, $commune->population);
};

$tabCommunesStr = array_map($fonctionDeTransfo, $communes);

var_dump($tabCommunesStr);
