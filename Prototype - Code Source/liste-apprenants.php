<?php

require("./apprenant.php");

$liste_apprenants = [];

 // Saisie des données
 $apprenant = new Apprenant;
 $apprenant->setNom("Madani 1");
 $apprenant->setPrenom("Ali");
 $liste_apprenants[] = $apprenant ;

 $apprenant = new Apprenant;
 $apprenant->setNom("Chami");
 $apprenant->setPrenom("Mouad");
 $liste_apprenants[] = $apprenant ;

 $apprenant = new Apprenant;
 $apprenant->setNom("Madani");
 $apprenant->setPrenom("Fatima");
 $liste_apprenants[] = $apprenant ;

 // $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

 // Traitement
 $liste_apprenants_json =  json_encode($liste_apprenants);
 
 // Affichage
 echo $liste_apprenants_json;
?>