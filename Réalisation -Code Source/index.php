<!doctype html>
<html lang="en">
  <head>
	<title>Formulaire</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
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


<div class="container">
<div class="row">
    <form action="affichage.php" target="_blank" method="post" > 
      <div class="row justify-content-center ">
        <div class="col-5 bg-light  p-4 m-5 rounded-3">
          <div class="d-flex justify-content-center">
           
          </div>
          <fieldset>
           
            <div class="input-group mb-4">
              <input type="text" class="form-control md-6 p-2" placeholder="Prenom" name="prenom" required >
             
            </div>
            <div class="input-group mb-4">
              <input type="text" class="form-control p-2" placeholder="Nom" name="nom" required >
              
            </div>
            <div class="input-group mb-4">
              <input type="text" class="form-control p-2" placeholder="Email" name="email" equired>
              
            </div>
            <div class="input-group mb-4">
              <input type="text" class="form-control p-2" placeholder="Numéro" name="numero" equired>
             
            </div>
           <div class="input-group mb-4">
            <button type="submit" class="btn btn-primary  col-md-6 col-sm-12 p-2">Sign in</button>
            </div>
          </fieldset>

        </div>
     
      </div>
    
    </form>

   
</div>

</div>
</table>

	  
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>