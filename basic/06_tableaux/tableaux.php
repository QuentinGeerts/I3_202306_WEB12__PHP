<?php

/*
    Chapitre 06 - Les tableaux
*/

// L'avantage d'un tableau par rapport à une variable, c'est que nous pouvons aliaser plusieurs emplacements en mémoire à une seule variable.
// Et donc permettre d'avoir plusiuers emplacements en mémoire sous un même nom.

// → Déclaration

// Pour créer un tableau (vide), nous devons faire appel à la méthode array()

$juin = array();

// Ou encore utiliser l'initialisation à la volée

$juin = [];

// Imaginez un tableau comme un grosse armoire avec plein de tiroir.
// Tous ces tiroirs sont numérotés (un indice).
// Pour accéder à une case spécifique de mon tableau, je dois utiliser un indice.

// Imaginons le tableau suivant :
// [ 14, 13, 20, 15, 21, 22, 23 ]
// Dans ce tableau, il y a 7 valeurs, chacun d'elle possède un numéro allant de
// 0 jusqu'à la taille du tableau - 1.


// → Initialisation

$juin = [ 14, 13, 20, 15, 21, 22, 23 ];

// ou

$juin[0] = 14;
$juin[1] = 13;
$juin[2] = 20;
$juin[3] = 15;
$juin[4] = 21;
$juin[5] = 22;
$juin[6] = 23;

// → Extraction des données

echo $juin[0];
echo $juin[1];
echo $juin[2];
echo $juin[3];
echo $juin[4];
echo $juin[5];
echo $juin[6];

// Automatiser le traitement grâce à une boucle

for ($i=0; $i < count($juin); $i++) { 
// for ($i=0; $i <= count($juin) - 1; $i++) { 
// for ($i=0; $i <= sizeof($juin) - 1; $i++) { 
    echo $juin[$i] . "<br>";
}

// FOREACH

echo "<br><br><br>";

foreach ($juin as $key => $value) {
    echo "$key => $value <br>";
}

echo "<br><br><br>";

foreach ($juin as $value) {
    echo "$value <br>";
}

