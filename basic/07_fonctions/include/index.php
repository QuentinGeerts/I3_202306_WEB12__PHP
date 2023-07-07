<?php

$page = "";

if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

// header
include "header.php";

// Menu
include "menu.php";

// page
echo "<div class='container'>";
switch ($page) {
    case '':
    case 'accueil': 
        include "accueil.php";
        break;
    case 'apropos':
        include "page1.php";
        break;
    case 'contact':
        include "page2.php";
        break;

    case 'connexion':
        include 'connexion.php';
        break;
    case 'deconnexion':
        include 'deconnexion.php';
        break;
    
    default:
        include "notfound.php";
}
echo "</div>";

// footer
include "footer.php";
