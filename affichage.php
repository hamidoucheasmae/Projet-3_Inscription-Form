<?
 // Traitement

 // Initialisation du session
 session_start();

 // Initialisation du tableau des participants
 $nom = [];
 $prenom = [];
 $email=[];
 $numero=[];

 // Trouver ou créer le tableau dans Session
 if( isset( $_SESSION['nom'] ) ) {
    $nom =  $_SESSION['nom'] ;
 }else {
    $_SESSION['nom'] =  $nom;
 }

 // Ajouter le nom du nom dans le tableau
 $nom[] = @$_POST["nom"] ;

 // Enregistrer le tableau dans la session
$_SESSION['nom'] =  $nom;


 // Trouver ou créer le tableau dans Session
 if( isset( $_SESSION['nom'] ) ) {
    $prenom =  $_SESSION['nom'] ;
 }else {
    $_SESSION['nom'] =  $prenom;
 }

 // Ajouter le nom du nom dans le tableau
 $prenom[] = @$_POST["prenom"] ;

 // Enregistrer le tableau dans la session
$_SESSION['nom'] =  $prenom;


// Trouver ou créer le tableau dans Session
if( isset( $_SESSION['nom'] ) ) {
    $email =  $_SESSION['nom'] ;
 }else {
    $_SESSION['nom'] =  $email;
 }

 // Ajouter le nom du nom dans le tableau
 $email[] = @$_POST["email"] ;

 // Enregistrer le tableau dans la session
$_SESSION['nom'] =  $email;

// Trouver ou créer le tableau dans Session
if( isset( $_SESSION['nom'] ) ) {
    $numero =  $_SESSION['nom'] ;
 }else {
    $_SESSION['nom'] =  $numero;
 }

 // Ajouter le nom du nom dans le tableau
 $numero[] = @$_POST["numero"] ;

 // Enregistrer le tableau dans la session
$_SESSION['nom'] =  $numero;
// session_destroy()

?>

<!-- Affichage -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' href='main.css'>
</head>
<body>
<h1 class="mx-auto">Liste des participants</h1>
<div class="mt-4 col-12 ">
<table>
<tr> 
    <td class="bg-light">NOM</td>
    <td class="bg-light">PRENOM</td> 
    <td class="bg-light">EMAIL</td>
    <td class="bg-light"> numero</td> 
 </tr>
  <?php
  $i=0;
foreach ($_SESSION["nom"] as $value) {
    if($i==0){
        echo "<tr>"; 
        echo "<td>".$value."</td>";
        $i++;
    }elseif($i<=2 ){
        echo "<td>".$value."</td>";
        $i++;
    }else{
        echo "<td>".$value."</td>";
            echo "</tr>";
            $i=0;
     };
  
}
?>
</table>
</div>
</body>

</html>