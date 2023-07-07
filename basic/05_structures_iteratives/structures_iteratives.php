<?php

/*
    Chapitre 05 - Les structures itératives
*/

//  Il existe plusieurs structures itératives.
// Le but d'une structure itérative est de répéter un certain nombre de fois
// (définie ou indéfinie) un bloc d'instructions.

// → WHILE (TANT QUE)
// TANT QUE la condition est vraie, on va répéter le bloc

while (true) {
    // Le bloc d'instructions sera répété tant que la condition est vrai.
    // Dans ce cas-ci, le bloc sera répété de manière indéfinie
}

while (false) {
    // Le bloc d'instructions ne sera pas exécuté.
    // La vérification de l'expression booléenne se fait avant l'exécution du bloc.
}

// Le but sera de maitriser nos boucles.
// Pour y arriver, mettons un objectif à atteindre.

// Initialisation
$a = 0;

// Condition
while ($a <= 10) {

    // Nous arrêtons la boucle lorsque la variable $a aura atteint la valeur de 10.

    echo "Valeur de a : $a";

    // Pour se faire, nous devons à chaque passage dans la boucle, varier la valeur.
    // Sous peine d'être dans le même état que le premier while plus haut.

    // ⚠️ Ne pas oublier d'incrémenter la valeur de $a

    // Incrémentation
    $a = $a + 1;
    $a += 1;
    $a++;

}

// → DO ... WHILE
// Contrairement à la structure précédente, la structure DO ... WHILE exécute une première fois le bloc avant de vérifier la condition.

do {
    // Le bloc sera exécuté une première fois
    // ensuite la boucle sera exécutée indéfiniement
} while (true);


do {
    // Le bloc sera exécuté une première fois
    // ensuite la boucle sera arrêtée (ne respectant la condition)
} while (false);

// Dans la même optique, nous pouvons contrôler cette bpoucle avec un compteur.

// Initialisation
$a = 0;

do {

    echo "Valeur de a : $a";

    // ⚠️ Ne pas oublier d'incrémenter la variable (boucle infinie)
    
    // Incrémentation
    $a += 1;

// Condition
} while ($a <= 10);

// → FOR

// Permet de répéter un bloc d'instructions un nombre définit de fois
// Toutes les informations que nous avons besoin pour contrôler la boucle se trouve au même endroit

// Initialisation ; Condition ; Incrémentation (trinité de la boucle :))
for ($i = 0; $i <= 10; $i++) {
    echo "Valeur de i : $i";
}


// → FOREACH
// Permet de parcourir une structure telle qu'un tableau
// Sera vue dans le prochain chapitre.
