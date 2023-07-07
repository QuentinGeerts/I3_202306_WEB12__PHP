<?php

session_start();

$message_erreur = "";

if (isset($_SESSION['login'])) header('Location: page.php');

if (isset($_POST['login'], $_POST['password'])) {
    $login = trim($_POST['login']);
    $password = trim($_POST['password']);

    if (!empty($login) && !empty($password)) {

        // Vérifier si le login et password sont corrects
        if ($login === "admin" && $password === "admin") {

            $message_erreur = "<p class='alert alert-success'>Connexion réussie</p>";

            $_SESSION['login'] = $login;

            header("refresh: 4; url=page.php");

        } else {
            $message_erreur = "<p class='alert alert-error'>Login / mot passe incorrects</p>";
        }

    } else {
        $message_erreur = "<p class='alert alert-error'>Login / mot de passe vide</p>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form > *  {
            display: block;
            margin: 10px 0;
        }

        .alert {
            width: 150px;
            border-width: 1px;
            border-style: solid;
            padding: 5px 10px;
            border-radius: 2px;
        }

        .alert-error {
            color: tomato;
            border-color: tomato;
            background-color: lightpink;
        }

        .alert-success {
            color: chartreuse;
            border-color: chartreuse;
            background-color: #22A122;
        }
    </style>
</head>

<body>

    <?php if (!empty($message_erreur)) echo $message_erreur; ?>

    <form action="./index.php" method="post">

        <label for="login">login :</label>
        <input type="text" name="login" id="login">

        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password">

        <button type="submit">Se connecter</button>

    </form>

</body>

</html>