

<?
 // Traitement

 // Initialisation du session
 @session_start();

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
    <link rel='stylesheet' type='text/css' media='print' href='main1.css'>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand m-2" href="#">
<img src="final logo.png" alt="" width="Auto" height="60px"  class="d-inline-block align-top">
</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Page d'inscription </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="affichage.php">Liste des participants</a>
      </li>
  
    </ul>
  </div>
</nav>





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
<button onclick="window.print()">Print</button>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>