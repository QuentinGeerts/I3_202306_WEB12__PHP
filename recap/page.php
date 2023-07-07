<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    echo "<p>";
    if (isset($_SESSION['login'])) {
        echo "Bonjour " . $_SESSION['login'] . "<a href='deconnexion.php'>Se déconnecter</a>";
    } else {
        echo "Accès interdit. <a href='index.php'>Se connecter</a>";
    }

    echo "</p>";
    
    ?>

</body>

</html>