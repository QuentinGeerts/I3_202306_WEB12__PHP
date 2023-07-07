<?php

/*
    Chapitre 03 - Les opérateurs
*/

// → Opérateurs Arithmétiques

// +  : Addition
// -  : Soustraction
// *  : Multiplication
// /  : Division
// %  : Modulo (reste d'une division d'entiers)
// ** : Exposant

$a = 2;
$b = 3;

$res = $a + $b; // 5
echo "<p>$a + $b = $res</p>";

$res = $a - $b; // -1
echo "<p>$a - $b = $res</p>";

$res = $a * $b; // 6
echo "<p>$a * $b = $res</p>";

$res = $a / $b; // 0.66
echo "<p>$a / $b = $res</p>";

$res = $a % $b; // 2
echo "<p>$a % $b = $res</p>";

$res = $a ** $b; // 8
echo "<p>$a ** $b = $res</p>";

// → Opérateurs d'assignation

$a = $a + 2;
$a += 2;

$a = $a - 2;
$a -= 2;

$a = $a * 2;
$a *= 2;

$a = $a / 2;
$a /= 2;

$a = $a % 2;
$a %= 2;

$a = $a ** 2;
$a **= 2;

$b = "Hello";

$b = $b . " world";
$b .= " world";

// → Opérateurs de comparaison
// Le résultat d'une comparaison est un booléen

// - >      : plus grand que
// - <      : plus petit que
// - >=     : plus grand ou égal
// - <=     : plus petit ou égal
// - !=     : différent (valeur uniquement) (<> équivalent)
// - !==    : différent (valeur ou type)
// - ==     : égal (valeur)
// - ===    : égal (valeur ou type)

$note = 9;
$reussite = $note >= 10;

// → Opérateurs logique
// Permet de combiner plusieurs conditions
// Il existe 3 opérateurs logiques : ET, OU, NON

// ET  → && , and
// OU  → || , or
// NON → !

// ET :
// - true    &&     true    →   true
// - false   &&     true    →   false
// - true    &&     false   →   false
// - false   &&     false   →   false

// OU :
// - true    ||     true    →   true
// - false   ||     true    →   true
// - true    ||     false   →   true
// - false   ||     false   →   false

// NON :
// - !true  → false
// - !false → true

// XOR :
// - true    xor true    →   false
// - false   xor true    →   true
// - true    xor false   →   true
// - false   xor false   →   false
