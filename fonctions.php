<?php

function affiche(...$valeurs){
    foreach ($valeurs as $valeur){
        echo $valeur . "\n";
    }
}

function carre(&$n){
    $n = $n * $n;
}

$a = 10;
carre($a);
echo $a;

function fonction_prenant_string_ou_null(?string $s){

}



function nb_var_params($message, ...$nombres){

    echo gettype($nombres);
}

function tab($message, array $nombres){

}

nb_var_params("coucou", 1,2,3,4,5);
tab("coucou", 1,2,3);