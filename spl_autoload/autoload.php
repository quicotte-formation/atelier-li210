<?php

spl_autoload_register( function($classe){

    include_once $classe . ".php";
} );

$bateau = new \Vehicule\Bateau();
$voit = new \Vehicule\Voiture();