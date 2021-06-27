<?php
include("Personne.php");
session_start();
$liste_personne=[];
//tester sessions  
if( isset( $_SESSION['Personne'] ) ) {
    $personnes_list =  $_SESSION['Personne'] ;
 }else {
    $_SESSION['Personne'] =  $personnes_list;
 }
//teste input
if(isset($_POST["nom"])){
$personne =new Personne($_POST["nom"],$_POST["prenom"],$_POST["email"]);
// Traitement
$personnes_list[] = json_decode( json_encode($personne));
$_SESSION['Personne'] =  $personnes_list;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="affichage.css">
    <title>Document</title>
</head>
<body>  
<div class="btns" >
   
   
    <a  href="liste.php" role="button">Liste</a>  
    <a  href="index.php" role="button">Back</a>
    <button type="button" value="Fermer" onclick="window.close()">Fermer</button>


</div>
</body>
</html>

