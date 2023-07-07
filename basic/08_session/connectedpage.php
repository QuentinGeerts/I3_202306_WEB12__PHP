<?php

session_start();

if (isset($_SESSION['login'])) {
    echo "Bonjour " . $_SESSION['login'];
} else {
    echo "Accès interdit";
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

    <?=
    isset($_SESSION['login'])
        ? '<a href="./disconnect.php">Se déconnecter</a>'
        : '<a href="./index.php">Se connecter</a>'
    ?>


</body>

</html>