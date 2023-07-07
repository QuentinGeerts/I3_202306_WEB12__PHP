<?php

/* 
    Réalisez une fonction de recherche dans un tableau. Cette fonction va recevoir un tableau, la taille du tableau et la valeur recherchée en paramètres et envoyer l’indice de l’élément dans le tableau. 
    Si l’élément ne s’y trouve pas, la fonction renvoie -1.
*/

function indexOf (array $array, mixed $searchValue): int {

    $index = -1;

    // WHILE

    $i = 0;
    while ($i < count($array)) {
        if ($array[$i] == $searchValue) {
            $index = $i;
            break;
        }
        $i = $i + 1;
    }

    return $index;
}

function lastIndexOf (array $array, mixed $searchValue): int {

    $index = -1;

    // WHILE

    $i = 0;
    while ($i < count($array)) {
        if ($array[$i] == $searchValue) {
            $index = $i;
        }
        $i = $i + 1;
    }

    return $index;
}

function allIndexOf (array $array, mixed $searchValue): array | int {

    $indexes = [];
    
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] == $searchValue) {
            array_push($indexes, $i);
        }
    }

    // (condition ? SiVrai : SiFaux)

    return count($indexes) > 1 ? $indexes : (count($indexes) == 1 ? $indexes[0] : -1);
}

$tab = [10, 5, 4, 9, 10, 8, 7, 0];


echo "<h1>IndexOf</h1>";
echo "<p>Index de 9 : " . indexOf($tab, 9) . "</p>";
echo "<p>Index de 5 : " . indexOf($tab, 5) . "</p>";
echo "<p>Index de 10 : " . indexOf($tab, 10) . "</p>";
echo "<p>Index de 3 : " . indexOf($tab, 3) . "</p>";

echo "<h1>LastIndexOf</h1>";
echo "<p>Index de 9 : " . lastIndexOf($tab, 9) . "</p>";
echo "<p>Index de 5 : " . lastIndexOf($tab, 5) . "</p>";
echo "<p>Index de 10 : " . lastIndexOf($tab, 10) . "</p>";
echo "<p>Index de 3 : " . lastIndexOf($tab, 3) . "</p>";

echo "<h1>AllIndexOf</h1>";
echo "<p>Index de 9 : " . AllIndexOf($tab, 9) . "</p>";
echo "<p>Index de 5 : " . AllIndexOf($tab, 5) . "</p>";
echo "<p>Index de 10 : " . is_array(AllIndexOf($tab, 10)) ? "C'est un tableau" : "" . "</p>";
echo "<p>Index de 3 : " . AllIndexOf($tab, 3) . "</p>";
