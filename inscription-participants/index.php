<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="img">
        <img src="final-logo.png" alt="">
      </div>
      <form action="affichage.php" target="_blank" method="poste" > 
        <div>
          
            <input type="text" name="nom" id="nom" required placeholder="  Nom">
        </div>
        <div>
            
            <input type="text" name="pr" id="pr" placeholder="  Prenom">
        </div>
        <div>
            <textarea name="adr" id="adr" cols="20"  placeholder="  Adresse"></textarea>
        </div>
        <div>
            
            <input type="tel" name="tel" id="tel" placeholder="  Telephone">
        </div>
        <div>
            <input type="email" name="email" id="email" placeholder="  Email">
        </div>
        <div>
            
            <input type="button" name="sub" id="sub" onclick="ajouter()" value="S'inscrire">
        </div>
    
    <button type="submit">Enregistrer</button>
    <table id="tab">
        <thead>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Téléphone</th>
        </thead>
        <tbody id="tb">

        </tbody>
        
    </table>
    <button></button>
    <input type="button" value="imprimer" onclick="imp()" id="bt">
    <script src="js.js"></script>

        <button type="submit">Enregistrer</button>
    </form>
</body>
</html>