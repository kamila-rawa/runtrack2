<?php
// Afficher les nombres premiers jusqu'à 1000
for ($num = 2; $num <= 1000; $num++) {
    $is_prime = true; // Supposons que le nombre est premier

    // Vérifier si le nombre est premier
    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            $is_prime = false;
            break; // Sortir de la boucle si un diviseur est trouvé
        }
    }

    // Si le nombre est premier, l'afficher avec un retour à la ligne
    if ($is_prime) {
        echo $num . "<br />";
    }
}
?>