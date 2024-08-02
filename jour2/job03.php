<?php
for ($i = 0; $i <= 100; $i++) {
    if ($i >= 0 && $i <= 20) {
        // Afficher en italique
        echo "<i>$i</i><br />";
    } elseif ($i >= 25 && $i <= 50) {
        // Afficher souligné
        echo "<u>$i</u><br />";
    } elseif ($i == 42) {
        // Afficher "La Plateforme_" à la place de 42
        echo "La Plateforme_<br />";
    } else {
        // Afficher le nombre normalement
        echo "$i<br />";
    }
}
?>