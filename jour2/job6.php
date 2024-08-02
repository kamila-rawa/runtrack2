<?php
// Déclaration des variables pour la largeur et la hauteur du rectangle
$largeur = 20;
$hauteur = 10;

// Boucle pour générer les lignes
for ($i = 0; $i < $hauteur; $i++) {
    // Boucle pour générer les colonnes
    for ($j = 0; $j < $largeur; $j++) {
        // Affichage d'un astérisque pour chaque colonne
        echo "*";
    }
    // Retour à la ligne après chaque ligne du rectangle
    echo "<br />";
}
?>
