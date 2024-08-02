<?php
// Démarrer la session
session_start();

// Vérifier si le bouton "reset" a été cliqué
if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
} else {
    // Vérifier si la variable de session "nbvisites" existe
    if (!isset($_SESSION['nbvisites'])) {
        $_SESSION['nbvisites'] = 0;
    }
    // Ajouter 1 à chaque visite de la page
    $_SESSION['nbvisites']++;
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compteur de visites</title>
</head>
<body>
    <p>Nombre de visites : <?php echo $_SESSION['nbvisites']; ?></p>
    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>
