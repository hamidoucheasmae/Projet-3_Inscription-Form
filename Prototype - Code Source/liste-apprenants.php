<?php

require("./apprenant.php");

$liste_apprenants = [];

 // Saisie des données
 $apprenant = new Apprenant;
$apprenant-> Nom = "Asmae";
$apprenant-> Prenom = "Hamidouche";
 $liste_apprenants[] = $apprenant ;

 $apprenant = new Apprenant;
  $apprenant->Nom = "Najale";
 $apprenant-> Prenom = "Sebbar";
 $liste_apprenants[] = $apprenant ;

 $apprenant = new Apprenant;
 $apprenant->Nom = "Najale";
 $apprenant-> Prenom = "Sebbar";
 $liste_apprenants[] = $apprenant ;

 // Traitement
 $liste_apprenants_json =  json_encode($liste_apprenants);
 
 // Affichage
 echo $liste_apprenants_json;
?>
