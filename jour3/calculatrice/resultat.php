<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat de la Calculatrice PHP</title>
</head>
<body>
    <h1>Résultat de la Calculatrice</h1>

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
    } else {
        echo "<h2>Erreur : Paramètres manquants.</h2>";
    }
    ?>

    <br><a href="calculatrice.php">Recommencer</a>
</body>
</html>
