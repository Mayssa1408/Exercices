<?php
// Création du tableau associatif
// Ici, nous créons un tableau associatif appelé "$informations".
// Un tableau associatif est un type de tableau dans lequel chaque élément est stocké sous forme de paire clé-valeur.
// Les clés sont des chaînes de caractères ('nom', 'prenom', 'age') et les valeurs associées sont respectivement 'Doe', 'John', et 25.
$informations = [
    "nom" => "Ben M'Barek",      // Clé 'nom' associée à la valeur 'Doe'
    "prenom" => "Mayssa",  // Clé 'prenom' associée à la valeur 'John'
    "age" => 21          // Clé 'age' associée à la valeur 25 (un entier)
];

// Utilisation d'une boucle foreach pour afficher les valeurs
// La boucle foreach me permet de parcourir le tableau associatif $informations.
// Elle va extraire, à chaque itération, une clé et sa valeur associée.
// "$cle" recevra la clé ('nom', 'prenom', 'age'), et "$valeur" recevra la valeur correspondante ('Doe', 'John', 25).
foreach ($informations as $cle => $valeur) {

    // La commande echo permet d'afficher une chaîne de caractères ou des données dans le navigateur.
    // Ici, nous allons afficher la clé suivie de ': ' puis la valeur correspondante.
    // L'opérateur '.' est utilisé pour concaténer (lier) plusieurs chaînes de caractères ensemble.
    // "<br>" est une balise HTML pour effectuer un retour à la ligne, donc chaque clé-valeur s'affichera sur une nouvelle ligne.
    echo $cle . ": " . $valeur . "<br>";
}
?>
