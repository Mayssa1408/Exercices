<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucles</title>
</head>
<body>
<?php
// Boucle de 1 à 20
for ($i = 1; $i <= 20; $i++) {
    // Si le nombre est divisible par 3 et par 5, afficher "FizzBuzz"
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz<br>";
    } 
    // Si le nombre est divisible par 3, afficher "Fizz"
    elseif ($i % 3 == 0) {
        echo "Fizz<br>";
    } 
    // Si le nombre est divisible par 5, afficher "Buzz"
    elseif ($i % 5 == 0) {
        echo "Buzz<br>";
    } 
    // Sinon, afficher simplement le nombre
    else {
        echo "$i<br>";
    }
}
?>
</body>
</html>