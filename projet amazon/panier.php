<?php
session_start();

include("produits.php");

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_GET['add_to_cart'])) {
    $choix = $_GET['choix'] ?? 0;
    for ($i = 0; $i < count($produits); $i++) {
        if ($produits[$i]['id'] == $choix) {
            $_SESSION['cart'][] = $produits[$i];
            header("Location: panier.php");
            exit();
        }
    }
}

if (isset($_GET['clear_cart'])) {
    $_SESSION['cart'] = [];
}

$total = 0;
for ($i = 0; $i < count($_SESSION['cart']); $i++) {
    $total += $_SESSION['cart'][$i]['price'];
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre Panier</title>
    <link rel="stylesheet" href="style_panier.css">
</head>
<body>
    <header>
        <img src="Logo-amazon.png" alt="Logo Amazon">
        <h1>Votre Panier</h1>
    </header>

    <main>
        <?php if (!empty($_SESSION['cart'])) { ?>
            <h3>Articles dans votre panier :</h3>
            <ul class="cart-list">
                <?php for ($i = 0; $i < count($_SESSION['cart']); $i++) { ?>
                    <li class="cart-item">
                        <img src="<?php echo $_SESSION['cart'][$i]['image']; ?>" alt="<?php echo $_SESSION['cart'][$i]['name']; ?>" class="cart-item-image">
                        <div class="cart-item-details">
                            <span class="cart-item-name"><?php echo $_SESSION['cart'][$i]['name']; ?></span>
                            <span class="cart-item-price"><?php echo $_SESSION['cart'][$i]['price']; ?> €</span>
                        </div>
                    </li>
                <?php } ?>
            </ul>
            <div class="cart-summary">
                <p>Total : <?php echo $total; ?> €</p>
                <form method="get" class="cart-action-form">
                    <button type="submit" name="clear_cart" class="button-clear">Vider le panier</button>
                </form>
                <button class="button-checkout">Paiement</button>
            </div>
        <?php } else { ?>
            <p>Votre panier est vide.</p>
        <?php } ?>
        <a href="page d'accueil.php" class="button-back">Retour à l'accueil</a>
    </main>
</body>
</html>
