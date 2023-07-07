<?php

// Déclaration d'un tableau vide
$entiers = [];

// Remplissage du tableau avec des valeurs aléatoires
// Allant de 1 à 10
for ($i = 0; $i < 6; $i++) {
    $entiers[$i] = rand(1, 10);
}

// Génération des lignes du tableau

$lignes = "";

foreach ($entiers as $indice => $valeur) {
    $lignes .= "<tr>";

    $lignes .= "<td>$indice</td>";
    $lignes .= "<td>$valeur</td>";

    $lignes .= "</tr>";
}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }

        table, td {
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>

<body>

    <table>
        <tr>
            <td>Indice</td>
            <td>Valeur</td>
        </tr>
        
        <?= $lignes; ?>

    </table>

</body>

</html>