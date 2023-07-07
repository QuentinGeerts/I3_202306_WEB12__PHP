<?php

/*
    Exercice 1.1
    Trouvez une méthode permettant d’inverser le contenu de deux variables 
    (du même type évidemment). 
    Si $nb1 = 5 et $nb2 = 7, après ce traitement $nb1 = 7 et $nb2 = 5.
*/

// Déclaration + affectation
$nb1 = 5;
$nb2 = 7;
$temp;

echo "<p>nb1 : $nb1 et nb2 : $nb2</p>";

$temp = $nb2; // 7
$nb2 = $nb1; // 5
$nb1 = $temp; // 5

echo "<p>nb1 : $nb1 et nb2 : $nb2</p>";
