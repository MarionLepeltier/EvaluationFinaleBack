<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Employé</title>
</head>
<body>
    

    <div class=container>
        <h1>Liste de nos employés :</h1>

        
        <div>

        <?php
            // PDO : initialiser la connexion
            $pdo = new PDO('sqlite:Employe.db');


            // Creer notre requéte SQL
            $requete = $pdo->query("SELECT * FROM Employé");

            // Exectuion
            $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);

            // Affichage

            foreach ($resultat as $affichage){
                echo "<div class=Liste>
                <h3>".$affichage["Nom"]."-". $affichage["Prenom"]."</h3>
                <h4>". $affichage["Date de naissance"]. " - " .$affichage["Sexe"]."</h4> <hr>
                </div>";
                
            };
           ?>

          </div>  
            
        



</body>
</html>