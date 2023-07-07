<?php
// Récupérer la session
session_start();

// Supprimer la variable de session
unset($_SESSION['login']);

// Détruire la session
session_destroy();

// Rediriger vers la page de connexion
header('Location: index.php');

?>