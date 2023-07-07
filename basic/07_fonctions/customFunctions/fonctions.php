<?php

/*
    Chapitre 07 - Les custom functions
*/

// Une zone mémoire où est stocké du code accessible par un alias
// Utilisation de paramètres pour transmettre une ou plusieurs valeurs du programme principal vers le sous-programme
// Utilisation d'un retour pour transmettre une valeur du sous-programme vers le programme principal

// Vous pouvez déclarer une fonction avec le mot-clef : function
// Vous devez ensuite définir l'alias de cette fonction

function maFonction () {
    echo "Hello";
}

// Pour exécuter la fonction, vous devez simplement l'appeler grâce à son alias
// suivi d'une paire de parenthèses.

maFonction();

// On peut également fournir des paramètres pour transmettre une ou plusieurs
// données originaire du programme principal vers le sous-programme

function direBonjour ($prenom) {
    echo "Bonjour $prenom";
    // echo "Bonjour " . $prenom;
}

direBonjour("Quentin");
$name = "Yousra";
direBonjour($name);

// Vous pouvez également transmettre une valeur du sous-programme vers le programme principal grâce au mot-clef : return

function addition ($a, $b) {
    return $a + $b;

    // $result = $a + $b;
    // return $result;
}

$nb1 = 4;
$nb2 = 12;

addition($nb1, $nb2); // 16

addition(12, 12);
addition(0, 12);

function concat($mot1, $mot2) {
    return $mot1 . $mot2;
}

echo "<p> " . concat("Hello ", "World !") . " </p>";

// Vous pouvez également typer les paramètres et le retour.
// Il suffit de mettre le type de la donnée devant le paramètre
// Ajouter " : type" après les parenthèses pour typer le retour

function multiplier (int $a, int $b) : int {
    return $a * $b;
}

$res1 = multiplier(4, 3);

echo "<p>3 * 4 = $res1</p>";

// $res2 = multiplier('a', 2);
// echo "<p>a * 2 = $res2</p>";

function add (float $a, int $b) : float {
    return $a + $b;
}

function add2 (int $a, float $b) : int {
    return $a + $b;
}

echo "<p>" . add(12.2, 2) . "</p>";
echo "<p>" . add2(12.2, 2) . "</p>";

declare (strict_types = 1);

function add3 (int $a, float $b) : float {
    return (int)($a + $b);
}

// add3('a', 12.2); // Pas possible
add3 (12, 12);