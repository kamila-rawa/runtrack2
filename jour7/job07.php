<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de transformation de texte</title>
</head>
<body>
    <form method="POST">
        <label for="str">Texte :</label>
        <input type="text" name="str" id="str" required>
        <label for="fonction">Transformation :</label>
        <select name="fonction" id="fonction">
            <option value="gras">Gras</option>
            <option value="cesar">César</option>
            <option value="plateforme">Plateforme</option>
        </select>
        <button type="submit">Valider</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $str = $_POST["str"];
        $fonction = $_POST["fonction"];

        function gras($str) {
            $words = explode(' ', $str);
            $result = '';
            foreach ($words as $word) {
                if (isset($word[0]) && $word[0] >= 'A' && $word[0] <= 'Z') {
                    $result .= '<b>' . $word . '</b> ';
                } else {
                    $result .= $word . ' ';
                }
            }
            return trim($result);
        }

        function cesar($str, $decalage = 2) {
            $result = '';
            $length = 0;
            while (isset($str[$length])) {
                $length++;
            }
            for ($i = 0; $i < $length; $i++) {
                $char = $str[$i];
                if (($char >= 'a' && $char <= 'z') || ($char >= 'A' && $char <= 'Z')) {
                    $ascii = ord($char);
                    if ($char >= 'a' && $char <= 'z') {
                        $ascii = ($ascii - ord('a') + $decalage) % 26 + ord('a');
                    } elseif ($char >= 'A' && $char <= 'Z') {
                        $ascii = ($ascii - ord('A') + $decalage) % 26 + ord('A');
                    }
                    $result .= chr($ascii);
                } else {
                    $result .= $char;
                }
            }
            return $result;
        }

        function plateforme($str) {
            $words = explode(' ', $str);
            $result = '';
            foreach ($words as $word) {
                $length = 0;
                while (isset($word[$length])) {
                    $length++;
                }
                if ($length > 1 && $word[$length - 2] == 'm' && $word[$length - 1] == 'e') {
                    $result .= $word . '_ ';
                } else {
                    $result .= $word . ' ';
                }
            }
            return trim($result);
        }

        if ($fonction == "gras") {
            echo gras($str);
        } elseif ($fonction == "cesar") {
            echo cesar($str);
        } elseif ($fonction == "plateforme") {
            echo plateforme($str);
        }
    }
    ?>
</body>
</html>
