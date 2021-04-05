<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
   
    <script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
</head>
<body>
    <table class="table">
  <thead class="table-striped table-dark">
    <tr>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Email</th>
      <th scope="col">Adress</th>
    </tr>
  </thead>
  <tbody  class ="text-light font-weight-bold" id="app">
  </tbody>
    </table>  
    <center>
    <a class=" btn btn-light button btn-lg hideButton" onclick="window.print()" role="button">IMPRIMER</a>  
<a class="btn button btn-lg btn-light hideButton" href="index.php" role="button">PAGE INSCRIPTION</a>
</center>
    <!-- <table id="app">
    </table> -->

<script type="text/javascript" >

$.get("affichage.php", function( data ) {
    var personne = JSON.parse(data);
  $( "#app" ).html( personne );

  //variable 
  let str="";


//traitement
for(i in personne){
   
  str +="<tr><td>"+personne[i].nom+"</td><td>"+personne[i].prenom+"</td><td>"+personne[i].email+"</td><td>"+personne[i].adress+"</td></tr>";
 
};


//afficahge 
document.getElementById("app").innerHTML =str;
 
});

    </script>
</body>
</html>