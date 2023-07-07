<?php
session_start();

$persons_row = "";

# Connexion à la base de données
include_once "./connect_database.php";

# Création de la requête de récupération de tous les users
$query = "SELECT * FROM person";

# Extraction des données de la requête
$objet = $database->query($query);

# Transforme l'objet de requête en tableau
$persons = $objet->fetchAll();

# Parcourir les personnes dans le tableau
foreach ($persons as $person) {

    # Extraction des données d'une personne dans une variable
    list(
        $id, $lastname, $firstname, $birthdate, $email,, $role, $created_at, $updated_at
    ) = $person;

    # Création des lignes du tableau HTML

    $persons_row .= "<tr>";

    $persons_row .= "<td><a href='readId.php?id=$id'><button>🔎</button></a></td>";
    $persons_row .= "<td>$id</td>";
    $persons_row .= "<td>$lastname</td>";
    $persons_row .= "<td>$firstname</td>";
    $persons_row .= "<td>$email</td>";
    $persons_row .= "<td>";
    $persons_row .= "<a href='update.php?id=$id'><button>🖍️</button></a>";
    $persons_row .= "</td>";
    $persons_row .= "<td>";
    $persons_row .= "<a onClick=\"javascript: return confirm('Voulez-vous supprimer $firstname $lastname ?');\" href='delete.php?id=$id'><button>🗑️</button></a>";
    $persons_row .= "</td>";

    $persons_row .= "</tr>";

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table {
            border-collapse: collapse;
            width: fit-content;
            margin: 10px auto;
            text-align: center;
        }

        th, td {
            border: 1px solid black;
            padding: 5px 10px;
            width: 150px;
        }
    </style>
</head>

<body>

    <?php include "./menu.php"; ?>

    <h1>Person - Read all</h1>

    
    
    

    <table>
        <thead>
            <tr>
                <th>Détails</th>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Modification</th>
                <th>Suppression</th>
            </tr>
        </thead>
        <tbody>
            <?= $persons_row; ?>
        </tbody>
    </table>


</body>

</html>