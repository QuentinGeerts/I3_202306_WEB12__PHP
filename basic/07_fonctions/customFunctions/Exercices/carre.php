<?php

/*
    Réalisez une fonction calculant le carré d’un nombre entier donné en paramètre.
*/

function carre (int $nombre) : int {

    // $resultat = $nombre * $nombre;
    // return $resultat;

    return $nombre ** 2;
    
}

echo "<p> " . carre(3) . " </p>";
echo "<p> " . carre(5) . " </p>";
echo "<p> " . carre(4) . " </p>";
echo "<p> " . carre(10) . " </p>";
echo "<p> " . carre(6) . " </p>";
echo "<p> " . carre(123) . " </p>";
echo "<p> " . carre(9) . " </p>";

?>