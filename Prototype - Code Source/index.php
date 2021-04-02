<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
</head>
<body>
    <div id="app"></div>
    <script type="text/javascript" >

        // KeyWord : JSON From the Server
        $.get("liste-apprenants.php", function( data ){

            var apprenants = JSON.parse(data);

            apprenants.forEach(apprenant => {

                // Création d'un élément html 
                var presentation =  $("<p></p>")
                .text(apprenant.Nom + "," + apprenant.Prenom );

                // Insertion de l'élément html dans l'élément div
                $("#app").append(presentation);
            });
        });

    </script>
</body>
</html>