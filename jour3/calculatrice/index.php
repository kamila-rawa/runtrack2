<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calculatrice PHP</title>
</head>
<body>
    <h1>Calculatrice</h1>
    <form method="get" action="">
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

    <?php
    if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['operation'])) {
        $a = floatval($_GET['a']);
        $b = floatval($_GET['b']);
        $operation = $_GET['operation'];

        if ($a >= 0 && $b >= 0) {
            switch ($operation) {
                case "addition":
                    $result = $a + $b;
                    break;
                case "soustraction":
                    $result = $a - $b;
                    break;
                case "multiplication":
                    $result = $a * $b;
                    break;
                case "division":
                    if ($b != 0) {
                        $result = $a / $b;
                    } else {
                        $result = "Erreur : Division par zéro!";
                    }
                    break;
                case "modulo":
                    if ($b != 0) {
                        $result = $a % $b;
                    } else {
                        $result = "Erreur : Division par zéro!";
                    }
                    break;
                default:
                    $result = "Opération non valide!";
                    break;
            }
            echo "<h2>Résultat : $result</h2>";
        } else {
            echo "<h2>Erreur : Les valeurs doivent être supérieures ou égales à 0.</h2>";
        }

        echo '<br><a href="index.php">Recommencer</a>';
    }
    ?>
</body>
</html>
