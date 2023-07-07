<?php

/*
    Calculatrice
    Réaliser l’algorithme d’une calculatrice basique. L’utilisateur est invité à saisir un nombre, un opérateur et un deuxième nombre. La calculatrice affiche ensuite le résultat.
*/

$resultat = 0;
$nb1 = 0;
$nb2 = 0;
$operateur = "+";

if (isset($_POST['nb1'], $_POST['nb2'], $_POST['operateur'])) {
    
    $nb1 = $_POST['nb1'];
    $nb2 = $_POST['nb2'];
    $operateur = $_POST['operateur'];

    switch ($operateur) {

        case '+':
            $resultat = $nb1 + $nb2;
            break;
        

        case '-':
            $resultat = $nb1 - $nb2;
            break;
        

        case '*':
            $resultat = $nb1 * $nb2;
            break;
        

        case '/':
            if ($nb2 != 0) $resultat = $nb1 / $nb2;
            else $resultat = "Division par 0 impossible !";
            break;

        default:
            $resultat = "Operateur non reconnu";
        

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
</head>

<body>
    <h1>Exercice 4.4 - Calculatrice</h1>

    <form action="./calculatrice.php" method="post">

        <input type="number" name="nb1" id="nb1" value="<?= $nb1; ?>">

        <select name="operateur" id="operateur">

            <option value="+" <?= ($operateur == "+") ? "selected" : "" ?>>+</option>
            <option value="-" <?= ($operateur == "-") ? "selected" : "" ?>>-</option>
            <option value="*" <?= ($operateur == "*") ? "selected" : "" ?>>*</option>
            <option value="/" <?= ($operateur == "/") ? "selected" : "" ?>>/</option>

        </select>

        <input type="number" name="nb2" id="nb2" value="<?= $nb2; ?>">

        <button type="submit">=</button>

        <input type="text" name="resultat" id="resultat" value="<?= $resultat; ?>" disabled>

    </form>

</body>

</html>