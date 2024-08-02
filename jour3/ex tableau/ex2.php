<?php
$ingredients1 = ["Farine", "Sucre", "Beurre", "Œufs", "Lait", "Levure"];
$quantiteIngredients1 = [200, 100, 50, 3, 200, 1]; 

$ingredients2 = ["Farine", "Sucre", "Beurre", "Œufs", "Lait", "Levure"];
$quantiteIngredients2 = [200, 100, 50, 3, 200, 1]; 

$ingredients3 = ["Farine", "Sucre", "Beurre", "Œufs", "Lait", "Levure"];
$quantiteIngredients3 = [200, 100, 50, 3, 200, 1]; 

echo "<h2>Ingrédients pour un gâteau :</h2>";
$index = 0;
while (isset($ingredients1[$index])) {
    echo $ingredients1[$index] . " : " . $quantiteIngredients1[$index] . "g<br>";
    $index++;
}

echo "<h2>Ingrédients pour trois gâteaux :</h2>";

$totalIngredients = [];
$index = 0;
while (isset($ingredients1[$index])) {
    $totalIngredients[$index] = $quantiteIngredients1[$index] + $quantiteIngredients2[$index] + $quantiteIngredients3[$index];
    echo $ingredients1[$index] . " : " . $totalIngredients[$index] . "g<br>";
    $index++;
}
?>
