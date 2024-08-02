<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calculatrice PHP</title>
</head>
<body>
    <h1>Calculatrice</h1>
    <form method="get" action="resultat.php">
        <label for="a">Nombre a (>= 0) :</label>
        <input type="number" id="a" name="a" min="0" step="any" required><br><br>

        <label for="b">Nombre b (>= 0) :</label>
        <input type="number" id="b" name="b" min="0" step="any" required><br><br>

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
