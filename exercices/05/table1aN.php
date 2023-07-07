<?php

/*
    Table de 1 à N
    Afficher les tables de multiplication N (entré par l'utilisateur).

    Bonus :
        - Vous pouvez choisir le nombre de ligne à afficher par table.
        - Case à cocher permettant d'afficher une ou plusieurs tables 😀
*/

$tables = "";
$table = 1;
$nbLignes = 10;
$displayAll = false;

if (isset($_POST['table'], $_POST['nbLignes'])) {

    $nbLignes = $_POST['nbLignes'];
    $table = $_POST['table'];

    $start_table = $table;

    if (isset($_POST['displayAll'])) {
        $displayAll = $_POST['displayAll'];
        $start_table = 1;
    }

    for ($t = $start_table; $t <= $table; $t++) {
        $tables .= "<div class='table'>";
        $tables .= "<h3>Table de $t</h3>";
        $tables .= "<ul>";
        for ($i = 1; $i <= $nbLignes; $i++) {

            $result = $i * $t;
            $tables .= "<li>$i x $t = $result</li>";
        }
        $tables .= "</ul>";
        $tables .= "</div>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table de 1 à N</title>
    <style>
        .tables {
            display: flex;
            flex-wrap: wrap;
            border: 1px solid black black;
            align-items: center;
            justify-content: center;
        }

        .table>* {
            display: block;
        }

        .table ul {
            width: 150px;
            border: 1px solid black red;
            padding-left: 15px;
        }

        form>* {
            margin: 5px 5px;
        }
    </style>
</head>

<body>

    <a href="../index.html">
        <button>
            Retour
        </button>
    </a>

    <h1>Table de 1 à N</h1>

    <form action="./table1aN.php" method="post">

        <label for="table">Table :</label>
        <input type="number" name="table" id="table" value="<?= $table; ?>">

        <label for="nbLignes">Nombre de lignes :</label>
        <input type="number" name="nbLignes" id="nbLignes" value="<?= $nbLignes; ?>">

        <br>

        <input type="checkbox" name="displayAll" id="displayAll" <?= ($displayAll) ? "checked" : "" ?>>
        <label for="displayAll">Afficher toutes les tables</label>

        <br>

        <button type="submit">Calculer</button>

    </form>


    <div class="tables">
        <?= $tables; ?>
    </div>

</body>

</html>