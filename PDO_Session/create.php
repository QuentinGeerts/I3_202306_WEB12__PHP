<?php
session_start();

if (isset($_POST['create'], $_POST['email']) && !empty($_POST['email'])) {


    $lastname = trim($_POST['lastname']);
    $firstname = trim($_POST['firstname']);
    $birthdate = trim($_POST['birthdate']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    # Connexion à la base de données
    include_once "./connect_database.php";

    $query = "
        INSERT INTO person 
        VALUES (NULL, :lastname, :firstname, :birthdate, :email, :password, DEFAULT, DEFAULT, DEFAULT)
        ";

    $objet = $database->prepare($query);

    $options = array(
        ":lastname" => $lastname,
        ":firstname" => $firstname,
        ":birthdate" => $birthdate,
        ":email" => $email,
        ":password" => $password,
    );

    if ($objet->execute($options)) {
        header("Location: readAll.php");
    } else {

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
        form>* {
            display: block;
            margin: 10px 0;
        }
    </style>
</head>

<body>

    <form action="./create.php" method="post">

        <label for="lastname">Nom :</label>
        <input type="text" name="lastname" id="lastname">

        <label for="firstname">Prénom :</label>
        <input type="text" name="firstname" id="firstname">

        <label for="birthdate">Date de naissance :</label>
        <input type="date" name="birthdate" id="birthdate">

        <label for="email">Email : *</label>
        <input type="email" name="email" id="email" required>

        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password">

        <button type="submit" name="create">Créer</button>

    </form>

</body>

</html>