<?php
// Démarrer la session
session_start();

// Vérifier si le bouton "reset" a été cliqué
if (isset($_POST['reset'])) {
    // Réinitialiser la liste des prénoms
    $_SESSION['prenoms'] = [];
} else if (isset($_POST['prenom']) && !empty($_POST['prenom'])) {
    // Ajouter le prénom à la variable de session
    if (!isset($_SESSION['prenoms'])) {
        $_SESSION['prenoms'] = [];
    }
    $_SESSION['prenoms'][] = htmlspecialchars($_POST['prenom']);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des prénoms</title>
</head>
<body>
    <form method="post">
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom">
        <button type="submit">Ajouter</button>
    </form>

    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form>

    <?php
    if (isset($_SESSION['prenoms']) && !empty($_SESSION['prenoms'])) {
        echo "<h2>Liste des prénoms :</h2>";
        echo "<ul>";
        foreach ($_SESSION['prenoms'] as $prenom) {
            echo "<li>" . $prenom . "</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>
