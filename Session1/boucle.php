<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucles</title>
</head>

<body>
    <ul>
        <?php
        $iterateur = 1;
        $multiplieur = 2;
        $limit = 10;

        if ($limit > 10): ?>
            <h2>Attention</h2>
        <?php endif;

        while ($iterateur <= $limit): ?>
            <li>
                <?php echo $iterateur; ?>
                x <?php echo $multiplieur; ?> =
                <?php echo $iterateur * $multiplieur; ?>
            </li>
            <?php
            $iterateur++;
        endwhile;
        ?>
    </ul>
</body>

</html>