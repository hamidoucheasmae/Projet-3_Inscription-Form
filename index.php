
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
</head>
<body>

<div class="container">
<div class="row">
    <form action="affichage.php" target="_blank" method="post" > 
      <div class="row justify-content-center ">
        <div class="col-5 bg-light color p-4 m-5 rounded-3">
          <div class="d-flex justify-content-center">
            <h1 class="pb-3">login</h1>
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
          
            <button type="submit" class="btn btn-primary">Submit</button>
          </fieldset>

        </div>
     
      </div>
    
    </form>

   
</div>

</div>
</table>
</body>
</html>