<?php

/*
    Table de N
    Afficher la table de multiplication N (entré par l'utilisateur).

    Bonus :
        - Vous pouvez choisir le nombre de ligne à afficher par table.
*/

$tables = "";
$table = 1;
$nbLignes = 20;

if (isset($_POST['table'], $_POST['nbLignes'])) {

    $nbLignes = $_POST['nbLignes'];
    $table = $_POST['table'];

    $tables .= "<ul>";
    for ($i = 1; $i <= $nbLignes; $i++) {

        $result = $i * $table;
        $tables .= "<li>$i x $table = $result</li>";
    }
    $tables .= "</ul>";
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table par N</title>
</head>

<body>

    <a href="../index.html">
        <button>
            Retour
        </button>
    </a>

    <h1>Table par N</h1>

    <form action="./tableN.php" method="post">

        <label for="table">Table :</label>
        <input type="number" name="table" id="table" value="<?= $table; ?>">

        <label for="nbLignes">Nombre de lignes :</label>
        <input type="number" name="nbLignes" id="nbLignes" value="<?= $nbLignes; ?>">

        <button type="submit">Calculer</button>

    </form>


    <div class="tables">
        <?= $tables; ?>
    </div>


</body>

</html>