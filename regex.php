<?php

if( preg_match('/[0-9]{10}/', '0123456789') ){
    echo "Valide";
}else{
    echo "Invalide";
}

if( preg_match('/(.{4}) (.{4}) (.{4}) (.{4})/', 'BE63 1234 1234 5678')){
    $groups = preg_split('/(.{4}) (.{4}) (.{4}) (.{4})/', 'BE63 1234 1234 5678',-1, PREG_SPLIT_DELIM_CAPTURE);
    var_dump($groups);
}