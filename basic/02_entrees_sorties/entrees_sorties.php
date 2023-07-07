<?php

/*
    Chapitre 02 - Opérateurs d'entrées et sorties
*/

// → echo
// Permet d'injecter du contenu sur une page HTML

// Affichage du texte uniquement
echo "Bonjour à toutes !";

// Insertion d'une balise paragraphe avec du texte à l'intérieur
echo "<p>Bonjour à toutes !</p>";

// → Concaténation
// Permet de coller deux chaines de caractères ensemble
// Opérateur : .

echo "<p>Hello" . "world</p>"; // "HelloWorld"

$prenom = "Quentin";

echo "<p>Bonjour " . $prenom . "</p>"; // "Bonjour Quentin"

// 🪧 uniquement avec des guillemets
// string interpolation (interpolation de chaine de caractères)
echo "<p>1 Bonjour $prenom</p>";
echo '<p>2 Bonjour $prenom</p>';
?>

<p>Lien vers le formulaire <a href="formulaire_GET.html">GET</a></p>
<p>Lien vers le formulaire <a href="formulaire_POST.html">POST</a></p>