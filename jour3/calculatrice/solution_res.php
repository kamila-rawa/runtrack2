<?php
$a = $_GET ["a"] ?? "0";
$b = $_GET ["b"] ?? "0";
$calcul = $_GET ["calcul"] ?? "!";
$resultat = 0;

if ($calcul == "addition"){
    $resultat = $a + $b;
}
else if ($calcul == "soustraction"){
    $resultat = $a - $b;
}
else if ($calcul == "multiplication"){
    $resultat = $a * $b;
}
else if ($calcul == "division"){
    $resultat = $a / $b;
}
else ($calcul == "modulo"){
    $resultat = $a % $b;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h1>Calculatrice</h1>
    <form method="get" action="">
        <label for="a">Nombre a (>= 0) :</label>
        <input type="number" name="a"><br><br>

        <label for="b">Nombre b (>= 0) :</label>
        <input type="number" name="b"><br><br>

        <label for="operation">Type de calcul :</label>
        <select id="operation" name="operation" required>
            <option value="addition">Addition</option>
            <option value="soustraction">Soustraction</option>
            <option value="multiplication">Multiplication</option>
            <option value="division">Division</option>
            <option value="modulo">Modulo</option>
        </select><br><br>

        <button type="submit">Calculer</button>
    </form>
</body>
</html>