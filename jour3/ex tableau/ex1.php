<?php

$infractions = array (45, 60, 52, 48, 55, 62);

$sum = 0;
$i = 0;
while ($i < 5) {
    $sum += $infractions[$i];
    $i++;
}

$moyenne = $sum / 5;

echo "Somme des 5 premières vitesses : " . $sum . "<br>";
echo "Moyenne des 5 premières vitesses : " . $moyenne . "<br>";

echo "Messages pour les 6 vitesses :<br>";

$j = 0;
while ($j < 6) {
    if ($infractions[$j] > 50) {
        echo "Vitesse " . ($j + 1) . " : " . $infractions[$j] . " km/h - Amende !<br>";
    } else {
        echo "Vitesse " . ($j + 1) . " : " . $infractions[$j] . " km/h - Félicitations !<br>";
    }
    $j++;
}
?>


<?php
// Étape 1 : Créer une liste d'infractions de vitesse
$infractions = [45, 60, 52, 48, 55, 62];

// Étape 2 : Calculer la somme des 5 premières vitesses
$sum = 0;
for ($i = 0; $i < 5; $i++) {
    $sum += $infractions[$i];
}

// Étape 3 : Calculer la moyenne des 5 premières vitesses
$moyenne = $sum / 5;

// Étape 4 : Afficher les résultats et les messages
echo "Somme des 5 premières vitesses : " . $sum . "<br>";
echo "Moyenne des 5 premières vitesses : " . $moyenne . "<br>";

echo "Messages pour les 6 vitesses :<br>";

for ($i = 0; $i < 6; $i++) {
    if ($infractions[$i] > 50) {
        echo "Vitesse " . ($i + 1) . " : " . $infractions[$i] . " km/h - Amende !<br>";
    } else {
        echo "Vitesse " . ($i + 1) . " : " . $infractions[$i] . " km/h - Félicitations !<br>";
    }
}
?>
