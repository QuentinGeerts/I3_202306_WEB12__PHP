<?php

session_start();

$id = "";
$lastname = "";
$firstname = "";
$birthdate = "";
$email = "";
$role = "";
$created_at = "";
$updated_at = "";

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
</head>

<body>

    <?php include "./menu.php"; ?>

    <h1>Profil de <?= $firstname . ' ' . $lastname ?></h1>
    <p><?= $role === 'admin' ? 'Administrateur' : 'Utilisateur'; ?></p>

    <p>Email : <?= $email; ?></p>
    <p>Date de naissance : <?= date_format(new DateTime($birthdate), 'd/m/Y'); ?></p>

    <p>Compte créé le : <?= date_format(new DateTime($created_at), 'd/m/Y à H:m:s'); ?></p>

</body>

</html>