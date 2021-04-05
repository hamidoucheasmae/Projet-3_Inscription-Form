<?php
include("Personne.php");
session_start();
$liste_personne=[];
//tester sessions  
if( isset( $_SESSION['Personne'] ) ) {
    $personnes_list =  $_SESSION['Personne'] ;
 }
 else {
    $_SESSION['Personne'] =  $personnes_list;
 }
//teste input
if(isset($_POST["nom"])){
$personne =new Personne($_POST["nom"],$_POST["prenom"],$_POST["email"],$_POST["adress"]);
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  
    <title>Document</title>
</head>
<body>  
	  <div class="container" >
    <h3> MERCI POUR VOTRE INSCRIPTION</h3>
    <center>
    <a class=" btn btn-light button btn-lg" href="liste.php" role="button">LISTE PARTICIPANTS</a>  
<a class="btn button btn-lg btn-light" href="index.php" role="button">PAGE INSCRIPTION</a>
</center>

</div>
</body>
</html>

