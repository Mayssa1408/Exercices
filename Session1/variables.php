<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>

<body>
    <!--Exercice 1 : Presentation-->
    <?php
    // Déclaration des variables personnelles
    $prenom = "Mayssa";
    $nom = "Ben M'Barek";
    $age = 21;
    ?>
    <p>Bonjour je m'appelle <?php echo $nom . ' ' . $prenom; ?> et je suis âgée de <b><?php echo $age; ?></b> ans </p>



    <!--Exercice 2 : Moyenne de notes-->
    <?php
    //Notes de chaque matière
    $noteFrancais = 15;
    $noteMath = 15;
    $noteAnglais = 12;
    $noteSciences = 16;
    $noteHist5oire = 13;

    // Calcul de la somme des notes et de la moyenne
    $sum = $noteFrancais + $noteMath + $noteAnglais + $noteSciences + $noteHistoire;
    $moyenne = $sum / 5;

    echo "La moyenne est de " . $moyenne . " pour ce quadrimestre";
    ?>
    <p>La moyenne de ce quadrimestre est de <b><?php echo $moyenne ?></b></p>



    <!--Exerice 3 - Convertisseur de devises-->
    <?php
    //montant en euros
    $montant = 150;
    //taux de conversion Euro vers USD
    $tauxDeConversion = 1.1;
    //calcul du montant converti en dollars
    $montantConverti = $montant * $tauxDeConversion;

    echo $montant . " euros est équivalent à " . $montantConverti . " en dollars ";
    ?>

</body>

</html>