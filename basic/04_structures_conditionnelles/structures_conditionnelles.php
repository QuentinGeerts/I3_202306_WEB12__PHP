<?php

/*
    Chapitre 04 - Les structures conditionnelles
*/

// → IF
// Permet l'exécution de blocs suivant une ou plusieurs conditions

if (true) {
    # Le bloc sera exécuté
}

if (false) {
    # Le bloc ne sera pas exécuté
}

# ---

if (true) {
    # Le bloc sera exécuté
}
else {
    # Le bloc ne sera pas exécuté
}

if (false) {
    # Le bloc ne sera pas exécuté
}
else {
    # Le bloc sera exécuté
}

// Si vous avez plusieurs conditions à tester, vous pouvez créer autant de bloc que vous souhaite (else if)

if (false) {
    # Le bloc ne sera pas exécuté
}
else if (false) {
    # Le bloc ne sera pas exécuté
}
else if (true) {
    # Le bloc sera exécuté
}
else {
    # Le bloc ne sera pas exécuté
}

// • Démo

# mineur : < 18

# adulte : 18 > && < 65
# senior : >= 65

$age = 17;

if ($age >= 18) {
    # majeur

    if ($age >= 65) {
        # senior
    }
    else {
        # adulte
    }
}
else {
    # mineur
}

# ---

if ($age >= 65) {
    # senior
}
else if ($age >= 18) {
    # adulte
}
else {
    # mineur
}

# ---

$taille = 150;

if ($taille > 200) {
    # Vous êtes un géant
}
else if ($taille > 180) {
    # Vous êtes de grande taille
}
else if ($taille > 160) {
    # Vous êtes de taille normale
}
else if ($taille > 140) {
    # Vous êtes de petite taille
}
else {
    # Votre taille n'est pas répertoriée
}

$isConnected = false;

if ($isConnected == false) {
// if ($isConnected != true) {
// if (!$isConnected) {
    echo "Accès interdit";
}

// → SWITCH

$valeur = "valeur3";

switch ($valeur) {
    case "valeur1": 
        # do something... 
        break;
    case "valeur2":
        # do something...
        break;
    case "valeur3":
        # do something...
        break;
    case "valeur4":
        # do something...
        break;
    default:
        # do something...
        break;
}
