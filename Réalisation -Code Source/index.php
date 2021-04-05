
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Solicode Events</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
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


<div class="container">
<div class="row">
    <form action="affichage.php" target="_blank" method="post" > 
      <div class="row justify-content-center ">
        <div class="col-5 bg-light  p-4 m-5 rounded-3">
          <div class="d-flex justify-content-center">
           
          </div>
          <fieldset>
           
            <div class="input-group mb-4">
              <input type="text" class="form-control p-2" placeholder="Prenom" name="prenom" required >
             
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
</body>
</html>