<?php

/*
    Lanceur de balles de tennis
    Réaliser l’algorithme d’un lanceur de balles de tennis. 
    Ce lanceur possède deux états :
    – prêt : 
        permet de savoir si le tennisman est prêt. 
        Il ne faut pas lancer de balles dans le cas contraire
    – panierVide : 
        permet de savoir s’il y a encore des balles disponibles
*/

// Opérateur ternaire
// Même chose qu'un if sauf sur une ligne
// (condition) ? "valeur si vrai" : "valeur si faux"

$message = "";

$pret = true;
$panierVide = true;

if ( isset($_GET['pret'], $_GET['panier'])) {

    $pret = $_GET['pret'];
    $panierVide = $_GET['panier'];

    if ($pret && !$panierVide) {
        # Lancer la balle
        $message = "<p>Lancer la balle<p>";
    } else {
        # Ne pas lancer la balle
        $message = "<p>Ne pas lancer la balle<p>";
        $message .= "<ul>";
        
        if (!$pret)  {
            // $message = $message . "Car vous n'êtes pas prêt.";
            // Version raccourcie
            $message .= "<li>Car vous n'êtes pas prêt.</li>";
        }

        if ($panierVide) {
            $message .= "<li>Car le panier est vide.</li>";
        }

        $message .= "</ul>";
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
        form>* {
            display: block;
            margin: 10px 0;
        }
    </style>
</head>

<body>
    <h1>Exercice - Lanceur de balles de tenis</h1>

    <form action="./lanceur_balles.php" method="get">

        <label>Prêt ?</label>
        <div>
            <input type="radio" name="pret" id="pretOui" value="1" <?= ($pret) ? "checked" : ""  ?>>
            <label for="pretOui">Oui</label>
            <input type="radio" name="pret" id="pretNon" value="0" <?= (!$pret) ? "checked" : "" ?>>
            <label for="pretNon">Non</label>
        </div>

        <label>Panier vide ?</label>
        <div>
            <input type="radio" name="panier" id="panierVide" value="1" <?= ($panierVide) ? "checked" : "" ?>>
            <label for="panierVide">Oui</label>
            <input type="radio" name="panier" id="panierRempli" value="0" <?= (!$panierVide) ? "checked" : "" ?>>
            <label for="panierRempli">Non</label>
        </div>

        <button type="submit">Lancer ?</button>

    </form>

    <?= $message; ?>
</body>

</html>