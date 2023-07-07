<?php

/*
    Table par 2
    Afficher la table par 2 générée par PHP. (pour les 20 premières valeurs)
*/

$format = "";
$table = 2;

for ($i = 1; $i <= 20; $i++) {
    $result = $i * $table;
    // echo $i . " x " . $table . " = " . $result;
    // $format = "<li>$i x $table = $result</li>";
    // $format = $format . "<li>$i x $table = $result</li>";
    $format .= "<li>$i x $table = $result</li>";
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table par 2</title>
</head>

<body>

    <h1>Table par 2</h1>
    
    <ul>
        <?php echo $format; ?>
    </ul>

</body>

</html>