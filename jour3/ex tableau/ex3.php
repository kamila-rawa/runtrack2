<?php
// Étape 1 : Créer une liste des villes
$villes = array("Paris", "Londres", "New York", "Tokyo", "Sydney", "Berlin");

// Étape 2 : Déterminer la longueur du tableau manuellement
$n = 0;
while (isset($villes[$n])) {
    $n++;
}

// Étape 3 : Trier la liste des villes par ordre alphabétique en utilisant un algorithme de tri à bulles
$sorted = false;

while (!$sorted) {
    $sorted = true;
    $i = 0;
    while ($i < $n - 1) {
        if ($villes[$i] > $villes[$i + 1]) {
            // Échanger les villes
            $temp = $villes[$i];
            $villes[$i] = $villes[$i + 1];
            $villes[$i + 1] = $temp;
            $sorted = false;
        }
        $i++;
    }
    $n--; // Optimisation pour réduire le nombre d'itérations
}

// Étape 4 : Afficher toutes les villes dans l'ordre alphabétique sans utiliser 'echo'
$output = "<h2>Villes que je veux visiter :</h2>";
$i = 0;
while (isset($villes[$i])) {
    $output .= $villes[$i] . "<br>";
    $i++;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Liste des Villes</title>
</head>
<body>
    <?php echo $output; ?>
</body>
</html>



<?php
// Étape 1 : Créer une liste des villes
$villes = ["Paris", "Londres", "New York", "Tokyo", "Sydney", "Berlin"];

// Étape 2 : Trier la liste des villes par ordre alphabétique en utilisant un algorithme de tri à bulles
$n = count($villes);
$sorted = false;

while (!$sorted) {
    $sorted = true;
    for ($i = 0; $i < $n - 1; $i++) {
        if ($villes[$i] > $villes[$i + 1]) {
            // Échanger les villes
            $temp = $villes[$i];
            $villes[$i] = $villes[$i + 1];
            $villes[$i + 1] = $temp;
            $sorted = false;
        }
    }
    $n--; // Optimisation pour réduire le nombre d'itérations
}

// Étape 3 : Afficher toutes les villes dans l'ordre alphabétique
echo "<h2>Villes que je veux visiter :</h2>";
for ($i = 0; $i < count($villes); $i++) {
    echo $villes[$i] . "<br>";
}
?>

