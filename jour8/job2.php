<?php
// Durée de vie du cookie (1 an)
$cookie_expiration = time() + (365 * 24 * 60 * 60);

// Vérifier si le bouton "reset" a été cliqué
if (isset($_POST['reset'])) {
    setcookie('nbvisites', 0, $cookie_expiration);
    $_COOKIE['nbvisites'] = 0; // Mettre à jour la valeur immédiatement pour l'affichage
} else {
    // Vérifier si le cookie "nbvisites" existe
    if (isset($_COOKIE['nbvisites'])) {
        $nbvisites = $_COOKIE['nbvisites'] + 1;
    } else {
        $nbvisites = 1;
    }
    // Mettre à jour le cookie avec la nouvelle valeur
    setcookie('nbvisites', $nbvisites, $cookie_expiration);
    $_COOKIE['nbvisites'] = $nbvisites; // Mettre à jour la valeur immédiatement pour l'affichage
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compteur de visites</title>
</head>
<body>
    <p>Nombre de visites : <?php echo isset($_COOKIE['nbvisites']) ? $_COOKIE['nbvisites'] : 0; ?></p>
    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>
