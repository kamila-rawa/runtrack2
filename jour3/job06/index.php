<?php
// Étape 1 : Créez une variable de type string
$str = "Les choses que l'on possède finissent par nous posséder.";

// Étape 2 : Initialisez une variable pour stocker la chaîne inversée
$reversedStr = "";

// Étape 3 : Parcourez la chaîne à l'envers
$length = 0;
while (isset($str[$length])) {
    $length++;
}

for ($i = $length - 1; $i >= 0; $i--) {
    $reversedStr .= $str[$i];
}

// Affichez le résultat
echo $reversedStr;
?>
