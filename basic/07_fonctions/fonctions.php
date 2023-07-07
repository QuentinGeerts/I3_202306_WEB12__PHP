<?php

// 1 - strlen
// fournit la taille (en caractères) d’une chaine de caractères

// strlen(string $string): int

echo "<p>" . strlen("Bonjour") . "</p>"; // 7

// 2 - strtolower
// met en minuscules tous les caractères d’une chaine

// strtolower(string $string): string

echo "<p>" . strtolower("Bonjour") . "</p>"; // "bonjour"

// 3 - strtoupper
// met en majuscules tous les caractères d’une chaine

// strtoupper(string $string): string

echo "<p>" . strtoupper("Bonjour") . "</p>"; // "BONJOUR";

// 4 - ucfirst
// met en majuscule le premier caractère d’une chaine

// ucfirst(string $string): string

echo "<p>" . ucfirst("bonjour") . "</p>"; // "Bonjour"

// 5 - substr
// permet d’extraire une partie d’une chaine de caractères

// substr(string $string, int $offset, ?int $length = null): string

echo "<p>" . substr("Bonjour", 2) . "</p>"; // "njour"
echo "<p>" . substr("Bonjour", 2, 3) . "</p>"; // "njo"

// 6 - substr_count 
// fournit le nombre de fois qu’une sous-chaine apparait dans une chaine
// de caractères

// substr_count(string $haystack, string $needle, int $offset = 0, ?int $length = null): int

echo "<p>" . substr_count("Bonjour", "o") . "</p>"; // 2


// 7 - strrchr 
// extrait d’une chaine la suite des caractères rencontrée à partir de la
// dernière apparition d’un repère fournit en paramètre. Le repère utilisé
// consiste en un caractère

// strrchr(string $haystack, string $needle): string|false

// 8 - strip_tags
// supprime toutes les balises HTML et PHP présentes dans une chaine de
// caractères

// strip_tags(string $string, array|string|null $allowed_tags = null): string
$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo "<p>" . strip_tags($text, '<p><a>') . "</p>"; // "<p>Test paragraph.</p> <a href="#fragment">Other text</a>"

// 9 - stripslashes
// supprime les anti-slash (\) dans une chaine de caractères

// stripslashes(string $string): string

// 10 - nl2br
// convertit les caractères de nouvelle ligne en retour de chariot HTML

// nl2br(string $string, bool $use_xhtml = true): string

// 11 - urlencode
// encode une chaine de caractères en convertissant les caractères nonascii en caractère de type %xx pour générer une URL

// urlencode(string $string): string

// 12 - urldecode
// décode une chaine URL. Il convertit du type %xx vers le caractère
// correspondant.

// urldecode(string $string): string

// 13 - htmlspecialchars
// convertit les caractères spéciaux en leur équivalent HTML

// htmlspecialchars(string $string, int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401, ?string $encoding = null, bool $double_encode = true): string

// 14 - htmlentities
// convertit tous les caractères ayant une signification particulière dans le
// langage HTML

// htmlentities(string $string, int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401, ?string $encoding = null, bool $double_encode = true): string

// 15 - str_replace
// remplace toutes les occurrences d’une chaine par une autre chaine.

// str_replace( array|string $search, array|string $replace, string|array $subject, int &$count = null): string|array

// 16 - trim
// retourne une copie d’une chaine de caractères sans les espaces
// « blancs » de début et de fin de chaine.

// trim(string $string, string $characters = " \n\r\t\v\x00"): string

// 17 - explode
// scinde une chaine de caractères sur base d’un délimiteur et retourne
// un tableau contenant les éléments résultant de la division

// explode(string $separator, string $string, int $limit = PHP_INT_MAX): array

// 18 - implode
// retourne une chaine de caractères constituée de tous les éléments d’un
// tableau séparés par une chaine de jointure.

// implode(string $separator, array $array): string

// 19 - list
// permet d’assigner une série de variables en une seule ligne à partir d’un
// tableau

// list(mixed $var, mixed ...$vars = ?): array

// 20 - each (obsolète)
// retourne un tableau de 4 éléments(0, 1, key, value) reprenant la clé et
// la valeur de l’élément courant d’une table.

// each(array|object &$array): array

// 21 - count / sizeof
// retourne le nombre d’éléments que contient le tableau

// count(Countable|array $value, int $mode = COUNT_NORMAL): int

// 22 - is_array
// retourne « true » si le type de la variable est un tableau, le cas échéant
// « false ».

// is_array(mixed $value): bool