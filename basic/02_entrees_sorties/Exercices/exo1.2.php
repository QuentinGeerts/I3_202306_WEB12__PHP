<?php

/*
    Exercice 1.2
    Depuis un formulaire de contact, récupérez la valeur du champ « Nom » 
    et « Prénom », et afficher une page qui indique « Message envoyé » 
    suivi de « Merci » et les nom et prénom de la personne.
*/



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

    <h1>Formulaire de contact</h1>

    <?php
    $nom = "";
    $prenom = "";
    $message = "";

    if (isset($_POST['nom'], $_POST['prenom'], $_POST['message'])) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $message = $_POST['message'];

        echo "<div style='border: 1px solid black'>";

        echo "<p>Votre message a bien été posté $prenom $nom</p>";
        echo "<p>Message : $message</p>";

        echo "</div>";
    }

    ?>

    <form action="./exo1.2.php" method="post">

        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom">

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom">

        <label for="message">Message :</label>
        <textarea name="message" id="message"></textarea>

        <div>
            <input type="submit" value="Envoyer">
            <button type="submit">Envoyer</button>
        </div>

    </form>

    <div>
        <p><?= $nom ?></p>
        <p><?= $prenom ?></p>
        <p><?php echo $message ?></p>
    </div>
</body>

</html>