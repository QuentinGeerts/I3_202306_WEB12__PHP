<?php

session_start();

$id = "";


if (isset($_GET['id'])) {

    $id = $_GET['id'];

    # Connexion à la base de données
    include_once "./connect_database.php";

    # Création de la requête
    $query = "DELETE FROM person WHERE id = :id";
    $options = array(
        ":id" => $id
    );
    $objet = $database->prepare($query);

    if ($objet->execute($options)) {
        header("Location: readAll.php");
    }
}
