<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonction</title>
</head>
<body>
<?php
// Définir une fonction qui vérifie si un nombre est pair ou impair
function verifierPairImpair($nombre) {
    if ($nombre % 2 == 0) {
        return "Pair";
    } else {
        return "Impair";
    }
}

// Boucle de 1 à 10 pour tester la fonction
for ($i = 1; $i <= 10; $i++) {
    // Appel de la fonction et affichage du résultat
    echo "$i est " . verifierPairImpair($i) . "<br>";
}
?>
</body>
</html>