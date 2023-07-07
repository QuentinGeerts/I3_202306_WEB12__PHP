<?php

/*
    Initialiser un tableau de 10 entiers avec les valeurs 2, 4, 8, 16, 32, 64, 128, 256, 512, 1024 à l’aide d’une boucle. Ensuite, à l’aide d’une boucle afficher la valeur de chaque cellule du tableau.
*/

$puissance = [];

for ($i=0; $i < 10; $i++) { 
    $puissance[$i] = 2 ** ($i + 1);
}

// Génération des lignes du tableau

$lignes = "";

foreach ($puissance as $indice => $valeur) {
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