<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="affichage.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
</head>
<body>

<div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Email</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      
  <tbody  id="app">
    </tbody>
  </table>
 
</div>
    </table>  
    <center>
    <button onclick="window.print()" role="button">Imprimer</button>  
<button  href="index.php" role="button">Back</button>
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
   
  str +="<tr><td>"+personne[i].nom+"</td><td>"+personne[i].prenom+"</td><td>"+personne[i].email+"</td></tr>";
 
};


//afficahge 
document.getElementById("app").innerHTML =str;
 
});



    </script>

<script>
   
   var background=document.getElementsByName()("tr");
       background.style.backgroundColor="red";

       // '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
$(window).on("load resize ", function() {
 var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
 $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();

  </script>
</body>
</html>