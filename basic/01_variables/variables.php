<?php

/*
    Chapitre 01 - Les variables
*/

// → Variables
// Emplacement en mémoire où on peut stocker une valeur à une adresse
// Préfixer par un dollar ($)

// • Déclaration
// Réservation d'un emplacement en mémoire

$nomVariable;

// • Affectation
// Donner une valeur à une variable

$a = 42;
$b = 2.4;
$c = "Bonjour";
$d = 'Bonjour';
$f = 2 + 2;
$g = $a + $b;

// 🪧 La casse a de l'importance → Différente de $a
$A = 5; 

// → Constantes
// Emplacement en mémoire où on peut stocker une valeur
// ⚠️ ne peut pas être réaffectée

// 🪧 fonctionne dans et en dehors de la définition d'une classe
const MY_CONSTANTE = "Hello"; 

// 🪧 fonctionne uniquement en dehors de la définition d'une classe
define('PI', 3.141592);
$h = PI * $a;
// PI = 42; // Impossible de modifier une constante !

// → Bonnes pratiques

// - Nom doit être cohérent (alphabet à éviter)
// - Accents et caractères spéciaux interdits → langage anglophone
// - lowerCamelCase pour les variables (UpperCamelCase pour les classes)
// - UPPERCASE pour les constantes

// → Types de données

// Null
$variableNull = null;

// Entier
$entier1 = 42;
$entier2 = -2;

// Décimal
$decimal1 = 1.23;
$decimal2 = -1.23;
$decimal3 = 1; // 1.00

// Chaine de caractères
$chaine1 = "Hello World !";
$chaine2 = "";
$chaine3 = "zB23$^ù-!2 ";

// Booléen
// État : true ou false => 0 : false | 1 : true
$booleen1 = true;
$booleen2 = false;

// Tableau
// Vu plus tard ...

// Objet
// Vu plus tard ...
