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
    //Déclariont d'un tableau indexé numériquement 
    $fruits = ['pomme','fraises', 'bananes', 'poire', 'kiwi', 'ananas'];

    echo "Mon fruit préféré : " . $fruits[3]  . ". <br>";

    //ajout un nouveau fruit
    array_push($fruits,'mangue');

    echo "Tableau après ajout d'un fruit : <br>";
    print_r($fruits);
    ?>
</body>
</html>