<?php
// Déclaration de la variable pour la hauteur du triangle
$hauteur = 5;

// Boucle pour générer les lignes du triangle
for ($i = 1; $i <= $hauteur; $i++) {
    // Boucle pour générer les astérisques dans chaque ligne
    for ($j = 1; $j <= $i; $j++) {
        echo "-";
    }
    // Retour à la ligne après chaque ligne du triangle
    echo "<br />";
}
?>
