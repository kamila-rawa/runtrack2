<?php
session_start();

include("produits.php");

// Vérifier si un article a été ajouté au panier
if (isset($_GET['add_to_cart'])) {
    $choix = $_GET['choix'] ?? 0;
    for ($i = 0; $i < count($produits); $i++) {
        if ($produits[$i]['id'] == $choix) {
            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = [];
            }
            $_SESSION['cart'][] = $produits[$i];
            header("Location: panier.php");
            exit();
        }
    }
}

// Vider le panier
if (isset($_GET['clear_cart'])) {
    $_SESSION['cart'] = [];
    header("Location: panier.php");
    exit();
}
