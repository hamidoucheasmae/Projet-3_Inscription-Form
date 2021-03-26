<?
 // Traitement

 // Initialisation du session
 session_start();

 // Initialisation du tableau des participants
 $nom= [];
 $pr= [];
 $adr=[];
 $tel=[];

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
 if( isset( $_SESSION['pr'] ) ) {
    $prenom =  $_SESSION['pr'] ;
 }else {
    @$_SESSION['pr'] =  $prenom;
 }

 // Ajouter le nom du nom dans le tableau
 $prenom[] = @$_POST["pr"] ;

 // Enregistrer le tableau dans la session
$_SESSION['pr'] =  $prenom;


// Trouver ou créer le tableau dans Session
if( isset( $_SESSION['email'] ) ) {
    $email =  $_SESSION['email'] ;
 }else {
    $_SESSION['email'] =  $email;
 }

 // Ajouter le nom du nom dans le tableau
 $email[] = @$_POST["email"] ;

 // Enregistrer le tableau dans la session
$_SESSION['email'] =  $email;

// Trouver ou créer le tableau dans Session
if( isset( $_SESSION['tel'] ) ) {
    $numero =  $_SESSION['tel'] ;
 }else {
    $_SESSION['tel'] =  $numero;
 }

 // Ajouter le nom du nom dans le tableau
 $numero[] = @$_POST["tel"] ;

 // Enregistrer le tableau dans la session
$_SESSION['tel'] =  $numero;

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
</head>
<body>
<h1>Liste des participants</h1>
<div class="container">
<div class="row">
<div class="col-2">
<ul>
    <?php
        foreach ($nom as $value) { 
        ?>
        <li><?php echo $value?></li>
        <?php
        }
    ?>  
   
</ul>
</div>
<div class="col-2">
<ul>
    <?php
        foreach ($prenom as $value) { 
        ?>
        <li><?php echo $value?></li>
        <?php
        }
    ?>  
    </ul>
 </div>  
 <div class="col-4">
<ul>
    <?php
        foreach ($email as $value) { 
        ?>
        <li><?php echo $value?></li>
        <?php
        }
    ?> 
    </ul> 
 </div>  
 <div class="col-3">
<ul>
    <?php
        foreach ($numero as $value) { 
        ?>
        <li class=""><?php echo $value?></li>
        <?php
        }
    ?>  
 
</ul>
</div> 
</div>
</div>

</body>
</html>