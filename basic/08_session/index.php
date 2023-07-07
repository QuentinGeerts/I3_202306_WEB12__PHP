<?php

session_start();
ob_start();

if (isset($_POST['login'], $_POST['password'])) {
    $login = trim($_POST['login']);
    $password = trim($_POST['password']);

    if (!empty($login) && !empty($password)) {

        if ($login == "admin" && $password == "admin") {
            $_SESSION['login'] = $login;
            header("Location: connectedpage.php");
        }
        else {
            $error_message = "Login / password incorrect";
        }

    }
    else {
        $error_message = "Vous devez entrer un login / password";
    }



}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="./index.php" method="post">

        <label for="login">Login :</label>
        <input type="text" name="login" id="login">

        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password">

        <button type="submit">Se connecter</button>

    </form>

</body>

</html>