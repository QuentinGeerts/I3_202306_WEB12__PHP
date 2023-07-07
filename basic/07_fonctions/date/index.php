<?php

echo date('d/m/Y H:i:s');

// $birthdate = date_create(); // par défaut 'now'
// $birthdate = date_create('1996-04-03 22:25:25');
$birthdate = date_create('1996-04-03 22:25:25');

echo "<p>" . $birthdate->format('d/m/Y H:i:s') . "</p>";
echo "<p>" . date_format($birthdate, 'd/m/Y H:i:s') . "</p>";

?>