<?php

/*
    Année bissextile
    Réaliser un petit algorithme qui sur base d’une année donnée va déterminer s’il s’agit d’une année bissextile. Une année est bissextile si elle est divisible par 4, mais non divisible par 100. Ou si elle est divisible par 400.
*/

$message = "";
$annee = "";

if ( isset($_GET['annee']) ) {
    $annee = $_GET['annee'];

    $estDivisiblePar4 = $annee % 4 == 0;
    $estDivisiblePar100 = $annee % 100 == 0;
    $estDivisiblePar400 = $annee % 400 == 0;

    if ($estDivisiblePar4 && !$estDivisiblePar100 || $estDivisiblePar400) {
        # bissextile
        $message = "Bissextile";
    } else {
        # pas bissextile
        $message = "Non bissextile";
    }

}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        form > * {
            display: block;
            margin: 10px 0;
        }
    </style>
</head>

<body>

    <h1>Exercice 4.1 - Bissextile</h1>

    <form action="./bissextile.php" method="get">

        <label for="year">Année :</label>
        <div>
        <input type="number" name="annee" id="year" value="<?= $annee; ?>">
        <span><?= $message; ?></span>
        </div>

        <button type="submit">Vérifier</button>

    </form>

</body>

</html>