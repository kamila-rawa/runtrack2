<?php
function calcule($a, $operation, $b) {
    if ($operation == '+') {
        return $a + $b;
    } elseif ($operation == '-') {
        return $a - $b;
    } elseif ($operation == '*') {
        return $a * $b;
    } elseif ($operation == '/') {
        if ($b != 0) {
            return $a / $b;
        } else {
            return "Erreur: Division par zéro";
        }
    } elseif ($operation == '%') {
        if ($b != 0) {
            return $a % $b;
        } else {
            return "Erreur: Division par zéro";
        }
    } else {
        return "Erreur: Opération non valide";
    }
}

echo calcule(10, '+', 5) . "<br>";  
echo calcule(10, '-', 5) . "<br>";  
echo calcule(10, '*', 5) . "<br>";  
echo calcule(10, '/', 5) . "<br>";  
echo calcule(10, '%', 3) . "<br>";  
echo calcule(10, '/', 0) . "<br>";  
echo calcule(10, '^', 2) . "<br>";  
?>
