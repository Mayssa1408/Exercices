<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice</title>
</head>

<body>

    <ul>
        <li> <b>Exercice 1</b> </li>
        <p>Parmi les variables suivantes, celles-ci ont un nom valide : $a, $_a, $a_a, $AAA et $a1</p>
        <?php $a = 4;
        $_a = 15;
        $a_a = 45;
        $AAA = 44;
        $a = 78; //pas valide
        $a = 54; //pas valide
        $a1 = 45; ?>


        <li> <b>Exercice 2 </b> </li>
        <p> <?php
        $note_maths = 15;
        $note_francais = 12;
        $note_histoire_geo = 9;
        $somme = $note_francais + $note_maths + $note_histoire_geo;
        $moyenne = $somme / 3;
        echo "La moyenne est de " . $moyenne . "/ 20.";
        ?> </p>

        <li> <b> Exercice 3</b></li> <!--Calcul prix TTC du produit-->
        <p><?php
        $prix_ht = 50;
        $tva = 20;
        $prix_ttc = $prix_ht + ($prix_ht * $tva / 100);
        echo 'Le prix TTC du produit est de ' . $prix_ttc . ' €.';
        ?>
        </p>

        <li><b>Exercice 4</b></li>
        <!-- Déclarer une variable $test qui contient la valeur 42. En utilisant la fonction var_dump(), 
         faire en sorte que le type de la variable $test soit string et que la valeur soit bien de 42-->
        <p>
            <?php
            $test = '42';
            echo var_dump($test);
            ?>
        </p>
    </ul>

    <h1>LES CONDITIONS <i>(IF, ELSE ET ELSEIF)</i></h1>

    <ul>
        <li><b>Exercice 5</b></li>
        <!--Déclarer une variable $sexe qui contient une chaîne de caractères. 
        Créer une condition qui affiche un message différent en fonction de la valeur de la variable.-->
        <p>
            <?php
            $sexe = 'F';
            if ($sexe == 'F') {
                echo 'Tu es une femme';
            } elseif ($sexe == 'H') {
                echo 'Tu es un homme';
            } else {
                echo 'Sexe non spécifié';
            }
            ?>
        </p>
        <li><b>Exercice 6</b></li>
        <!--Déclarer une variable $budget qui contient la somme de 1 553,89 €. 
        Déclarer une variable $achats qui contient la somme de 1 554,76 €. 
        Afficher si le budget permet de payer les achats.-->
        <p>
            <?php
            $budget = 1553.89;
            $achats = 1554.76;
            if ($budget >= $achats) {
                echo 'Paiement accepté';
            } else {
                echo 'Paiement refusé';
            }
            ?>
        </p>

        <li><b>Exercice 7</b></li>
        <!--Déclarer une variable$age qui contient la valeur de type integer de votre choix. 
        Réaliser une condition pour afficher si la personne est mineure ou majeure.-->
        <p>
            <?php
            $age = 14;
            if ($age >= 18) {
                echo 'Tu es majeur';
            } else {
                echo 'Tu es mineur';
            }

            ?>
        </p>

        <li><b>Exercice 8</b></li>
        <!--Déclarer une variable $heure qui contient la valeur de type integer de votre choix comprise entre 0 et 24. 
        Créer une condition qui affiche un message si l'heure est le matin, l'après-midi ou la nuit.-->
        <p>
            <?php
            $heure = 6; // Exemple d'heure
            
            if ($heure >= 5 && $heure < 12) {
                echo "C'est le matin";
            } elseif ($heure >= 12 && $heure < 18) {
                echo "C'est l'après-midi";
            } else {
                echo "C'est la nuit";
            }
            ?>
        </p>
    </ul>


</body>

</html>