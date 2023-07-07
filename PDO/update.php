<?php

$id = "";
$lastname = "";
$firstname = "";
$birthdate = "";
$email = "";
$role = "";
$created_at = "";
$updated_at = "";

# Modification des données
if (isset($_POST['update'], $_POST['email']) && !empty($_POST['email'])) {

    # Récupération de l'id dans l'URL
    $id = $_GET['id'];
    $lastname = trim($_POST['lastname']);
    $firstname = trim($_POST['firstname']);
    $birthdate = trim($_POST['birthdate']);
    $email = trim($_POST['email']);

    # Connexion à la base de données
    include_once "./connect_database.php";

    $query = "
        UPDATE person
        SET
            lastname = :lastname
            , firstname = :firstname
            , birthdate = :birthdate
            , email = :email
        WHERE id = :id
        ";

    $objet = $database->prepare($query);

    $options = array(
        ":id" => $id,
        ":lastname" => $lastname,
        ":firstname" => $firstname,
        ":birthdate" => $birthdate,
        ":email" => $email,
    );

    if ($objet->execute($options)) {
        header("Location: readAll.php");
    } else {

    }
}

# Récupération des données (transformées)
if (isset($_GET['id'])) {

    $id = $_GET['id'];

    # Connexion à la base de données
    include_once "./connect_database.php";

    # Création de la requête
    $query = "SELECT * FROM person WHERE id = :id";
    $options = array(
        ":id" => $id
    );
    $objet = $database->prepare($query);

    if ($objet->execute($options)) {

        $person = $objet->fetchAll()[0];

        # Extraction des données d'une personne dans une variable
        list(
            $id, $lastname, $firstname, $birthdate, $email,, $role, $created_at, $updated_at
        ) = $person;
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

        <?php include "./menu.php"; ?>

        <h1>Modification</h1>

    <!-- Ne pas oublier de rajouter l'id dans la destination du formulaire -->
    <form action="./update.php?id=<?= $id ?>" method="post">

        <label for="lastname">Nom :</label>
        <input type="text" name="lastname" id="lastname" value="<?= $lastname ?>">

        <label for="firstname">Prénom :</label>
        <input type="text" name="firstname" id="firstname" value="<?= $firstname ?>">

        <label for="birthdate">Date de naissance :</label>
        <input type="date" name="birthdate" id="birthdate" value="<?= $birthdate ?>">

        <label for="email">Email : *</label>
        <input type="email" name="email" id="email"  value="<?= $email ?>" required>

        <button type="submit" name="update">Modifier</button>

    </form>

</body>

</html>