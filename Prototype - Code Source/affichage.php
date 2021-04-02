

<?
 // Traitement

 // Initialisation du session
 @session_start();

 // Initialisation du tableau des participants
 $nom = [];

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






<div class="mt-4 col-12 ">
<table>
<tr> 
    <td class="bg-light">NOM</td>
  
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