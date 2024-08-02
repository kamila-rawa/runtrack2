<?php
session_start();

$produits = array(
    array(
        "id" => 1,
        "name" => "Serviette de plage",
        "overview" => "Yeahshion Serviette de Plage à Séchage Rapide 180x90 cm, Grande Serviette de Sport en Microfibre Anti Sable, Serviette de Plage Portable pour Sport, Voyage, Yoga, Natation, Surf Bleu",
        "image" => "https://m.media-amazon.com/images/I/81WjIxmtzdL._AC_SX569_.jpg",
        "price" => 15,99,
        
    ),
    array(
        "id" => 2,
        "name" => "Kit de jeu",
        "overview" => "Kit de jeu de plage enfant - Sac zippé réutilisable - Coloris Aleatoire",
        "image" => "https://m.media-amazon.com/images/I/81pxw4ot7pL._AC_SX569_.jpg",
        "price" => 23,99,
    ),
    array(
        "id" => 3,
        "name" => "Parasol de jardin",
        "overview" => "GOPLUS Parasol de Jardin Carré 3x3m,8 Baleines à Double Couche, Pare-Soleil d'Extérieur avec Trou de Ventilation, Protection Anti-UV, Rotation à 360°,Jardin et Terrasse H273 cm (3x3x2,73m, Bordeaux)",
        "image" => "https://m.media-amazon.com/images/I/61rnMYUTzIL._AC_SX569_.jpg",
        "price" => 179,99,
    ),
    array(
        "id" => 4,
        "name" => "Bouée crocodile",
        "overview" => "Intex bouée grand crocodile a chevaucher 58562EP 1 pièce Vert",
        "image" => "https://m.media-amazon.com/images/I/81cNOujV5nL._AC_SX569_.jpg",
        "price" => 11,24,
    ),
    array(
        "id" => 5,
        "name" => "Masque de plongée",
        "overview" => "Masque de Plongée Intégral avec Masque et Tuba Détachable, Anti-buée et Design Pliable pour Adultes Enfants",
        "image" => "https://m.media-amazon.com/images/I/71JGQgHVG6L._AC_SX569_.jpg",
        "price" => 32,98,
    ),
);


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon.fr</title>
    <link rel="stylesheet" href="Amazon.css">
</head>
<body>
   <header>
    <div class="header-principal">
        <img src="Logo-amazon.png" width="150px">
        <p class="TexteSpecial">Bienvenue sur Amazon</p>
        <!-- <img src="Caddie.png" width="150px" height="150px"> -->
    </div>

   <nav>
        <a href="#">Meilleures ventes</a>
        <a href="#">Amazon Basics</a>
        <a href="#">Ventes Flash</a>
        <a href="#">Dernières Nouveautés</a>
        <a href="#">Idées Cadeaux</a>
   </nav>
   </header>
   <div class="Articles">
        <a href="http://localhost/RUNTRACK2/Projet%20Amazon/article-stephane.php?choix=1">
        <img src="Serviettes-Plage.jpg" width="230px" height="230px" id="1">
        <p class="Article">Serviette de Plage à Séchage Rapide 180x90 cm</p>
        <button class="bouton">Voir le produit</button>
        </a>

        <a href="http://localhost/RUNTRACK2/amazon4/article-stephane.php?choix=2">
        <img src="Kit-Enfant.jpg" width="230px" height="230px" id="2">
        <p class="Article">Kit de jeu de plage enfant - Sac zippé réutilisable</p>
        <button class="bouton">Voir le produit</button>
        </a>

        <a href="http://localhost/RUNTRACK2/amazon4/article-stephane.php?choix=3">
        <img src="Parasol-GoPlus.jpg" width="230px" height="230px" id="3">
        <p class="Article">GOPLUS Parasol de Jardin Carré 3x3m</p>
        <button class="bouton">Voir le produit</button>
        </a>

        <a href="http://localhost/RUNTRACK2/amazon4/article-stephane.php?choix=4">
        <img src="Croco.jpg" width="230px" height="230px" id="4">
        <p class="Article">Bouée Crocodile Intex bouée crocodile à Chevaucher</p>
        <button class="bouton">Voir le produit</button>
        </a>

        <a href="http://localhost/RUNTRACK2/amazon4/article-stephane.php?choix=5">
        <img src="Masque.jpg" width="230px" height="230px" id="5">
        <p class="Article">Masque de Plongée Intégral</p>
        <button class="bouton">Voir le produit</button>
        </a>
        
    </div>
</body>
</html>

