<?php

function fonction_params_string_et_int(string $b, int $a){
    // ...
}

function fonction_params_string_et_int_ou_null(?string $b, ?int $a){
    // ...
}

function fonction_retournant_string():string{
    return null;// ERREUR
}

function fonction_retournant_ou_null():?string{
    return null;// Ca passe ; )
}
