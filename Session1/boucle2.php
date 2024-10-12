<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucles</title>
</head>
<body>
<?php
// Boucle de 1 à 10
for ($i = 1; $i <= 10; $i++) {
    // Si le nombre est pair, on le met en gras
    if ($i % 2 == 0) {
        echo "<strong>$i</strong><br>";
    } else {
        echo "$i<br>";
    }
}
?>
</body>
</html>