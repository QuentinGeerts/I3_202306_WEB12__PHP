<?php

echo "<nav>";
echo "<ul>";

echo "<li><a href='./create.php'>Create</a></li>";
echo "<li><a href='./readAll.php'>Read all</a></li>";

if (isset($_SESSION['email'])) {
    echo "<li><a href='logout.php'>Déconnexion</a></li>";
}
else {
    echo "<li><a href='login.php'>Connexion</a></li>";
}

echo "</ul>";
echo "</nav>";

?>
