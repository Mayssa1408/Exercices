<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau</title>
</head>
<body>
    <?php 
    
    $idendite=[
        ['Mayssa','21','Bruxelles'],
        ['Amira', '19', 'Paris'],
        ['Anya', '18', 'Brugges']
    ];
    
    array_push($idendite, ['Aicha','16','Toulouse']);
         // Parcourir le tableau et afficher les informations
    foreach($idendite as $personne){
        echo "Idendité : <br>";
        foreach($personne as $cle => $valeur){
            echo $valeur . "  ";
        }
        echo "<p>";
    }
    
    ?>
</body>
</html>