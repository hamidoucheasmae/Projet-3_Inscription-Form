<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="main.css">

   <style>
         .error {color: #FF0000;}
   </style>

</head>
<body>
   

   
  

<div class="container" id="container">
	<div class="form-container  form-container sign-in-container">
	<div class="overlay">
		
		<div class="overlay-panel overlay-right">
			<h1>ÉVENEMENT E-SPORT</h1>
			<span class=message1>Organisé par</span>
			<img class="img" src="image/bg.png"></img>
			
			
		</div>
	</div>
	
	</div>
	
	<div class="overlay-container">
	<form action="inscription.php" target="_blank" method="post">
		<h1 class="inscription" >Inscription</h1> 
			<span class=message>Veuillez remplir le formulaire d'inscription pour participer</span>
			<input type="text" placeholder="Nom" name="nom" />
			<input type="text" placeholder="Prénom" name="prenom"/>
			<input type="email" placeholder="Email" name="email" />
			<button class="btn1" >S'inscrire</button>
		</form>
	</div>
</div>


      
   <script src="app.js"></script>

</body>
</html>