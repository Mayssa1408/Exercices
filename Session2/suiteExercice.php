<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices</title>
</head>

<body>
    <h1>Les tableaux</h1>
    <ul>
        <li><b>Exercice 12</b></li>

        <?php
        $pays_capitales = [
            "France" => "Paris",
            "Allemagne" => "Berlin",
            "Italie" => "Rome"
        ];

        foreach ($pays_capitales as $pays => $capitale) {
            echo "La capitale de " . $pays . " est " . $capitale . ".<br>";
        }
        ?>

        <li><b>Exercice 13</b></li>

        <?php

        $nombre_aleatoire = [];


        for ($i = 0; $i < 10; $i++) {
            $nombre_aleatoire[] = rand(1, 100);
        }
        if (in_array(42, $nombre_aleatoire)) {
            echo "Le chiffre 42 est présent dans le tableau. <br>";
        } else {
            echo "Le chiffre 42 n'est pas présent dans le tableau.<br>";
        }
        var_dump($nombre_aleatoire);
        ?>

        <li><b>Exercice 14</b></li>
        <?php
        $pays_population = [
            'France' => 67595000,
            'Suede' => 9998000,
            'Suisse' => 8417000,
            'Kosovo' => 1820631,
            'Malte' => 434403,
            'Mexique' => 122273500,
            'Allemagne' => 82800000,
        ];

        foreach ($pays_population as $pays => $population) {
            if ($population >= 20000000) {
                echo $pays . " : " . $population . "<br>";
            }
        }
        ?>


        <li><b>Exercice 15</b></li>

        <?php
        $pays_population = [
            'France' => 67595000,
            'Suede' => 9998000,
            'Suisse' => 8417000,
            'Kosovo' => 1820631,
            'Malte' => 434403,
            'Mexique' => 122273500,
            'Allemagne' => 82800000,
        ];

        $nombre_pays = count($pays_population);
        echo "Le nombre d'éléments dans le tableau est : " . $nombre_pays;
        ?>
    </ul>


    <li><b>Exercice 16</b></li>
    <?php
    $personnes = [
        'Jean' => 16,
        'Manuel' => 19,
        'André' => 66
    ];

    echo "L'âge de Manuel est : " . $personnes['Manuel'] . " ans.";
    ?>

    <li><b>Exercice 17</b></li>
    <?php
    $cocktails = ['Mojito', 'Long Island Iced Tea', 'Gin Fizz', 'Moscow mule'];
    echo "Le deuxième cocktail est : " . $cocktails[1] . ".";
    ?>


    <li><b>Exercice 18</b></li>
    <?php
    $nombre_aleatoire = [];

    for ($i = 0; $i < 10; $i++) {
        $nombre_aleatoire[] = rand(1, 100);
    }

    $inferieur_50 = [];
    $superieur_ou_egal_50 = [];

    foreach ($nombre_aleatoire as $nombre) {
        if ($nombre < 50) {
            $inferieur_50[] = $nombre;
        } else {
            $superieur_ou_egal_50[] = $nombre;
        }
    }

    echo "Tableau des valeurs inférieures à 50 : <br>";
    print_r($inferieur_50);
    echo "<br>";
    echo "Tableau des valeurs supérieures ou égales à 50 : <br>";
    print_r($superieur_ou_egal_50);
    ?>


</body>

</html>