<?php
// Durée de vie du cookie (1 jour)
$cookie_expiration = time() + (24 * 60 * 60);

// Vérifier si le bouton "deco" a été cliqué
if (isset($_POST['deco'])) {
    setcookie('prenom', '', time() - 3600); // Supprimer le cookie en le mettant à une date passée
    unset($_COOKIE['prenom']); // Supprimer la valeur de la superglobale $_COOKIE pour cette session
}

// Vérifier si le formulaire de connexion a été soumis
if (isset($_POST['connexion']) && !empty($_POST['prenom'])) {
    $prenom = htmlspecialchars($_POST['prenom']);
    setcookie('prenom', $prenom, $cookie_expiration);
    $_COOKIE['prenom'] = $prenom; // Mettre à jour immédiatement la superglobale $_COOKIE
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de connexion</title>
</head>
<body>
    <?php if (isset($_COOKIE['prenom']) && !empty($_COOKIE['prenom'])): ?>
        <p>Bonjour <?php echo $_COOKIE['prenom']; ?> !</p>
        <form method="post">
            <button type="submit" name="deco">Déconnexion</button>
        </form>
    <?php else: ?>
        <form method="post">
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>
            <button type="submit" name="connexion">Connexion</button>
        </form>
    <?php endif; ?>
</body>
</html>
