<?php
/**
echo "Entrez un string:";
$texte = readline();

echo "Entrez un int:";
$entier = (int) readline("Entrez un entier");
*/
echo "Entrez un entier,string:";
fscanf(STDIN,"%d, %s",$age, $prenom);
echo sprintf("Vous êtes %s et vous avez %d ans", $prenom, $age);