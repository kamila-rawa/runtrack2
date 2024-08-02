<?php

$largeur = 20;
$hauteur = 10;

// Afficher la première ligne du rectangle
for ($i = 0; $i < $largeur; $i++) {
    echo "_";
}
echo "<br />";

// Afficher les lignes intermédiaires
for ($j = 0; $j < $hauteur; $j++) {
    echo "|"; // Bord gauche
    for ($i = 0; $i < $largeur; $i++) {
        echo "*"; // Espace à l'intérieur du rectangle
    }
    echo "|"; // Bord droit
    echo "<br />";
}

// Afficher la dernière ligne du rectangle
for ($i = 0; $i < $largeur; $i++) {
    echo "_";
}
echo "<br />";

?>
