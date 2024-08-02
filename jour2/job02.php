<?php
// Tableau des nombres à exclure
$excluded_numbers = array(26, 37, 88, 1111, 3233);

// Boucle de 0 à 1337
for ($i = 0; $i <= 1337; $i++) {
    // Vérifie si le nombre est dans le tableau des exclus
    if (in_array($i, $excluded_numbers)) {
        continue; // Passe au prochain nombre si c'est le cas
    }
    // Affiche le nombre avec un retour à la ligne
    echo "$i<br />";
}
?>