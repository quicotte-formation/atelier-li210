<?php

$pdo = new PDO("sqlite:films.db");
if( $pdo->exec("INSERT INTO genres (nom) VALUES('Animé')") == false ){
    die("ERREUR DE REQUETE");
}
