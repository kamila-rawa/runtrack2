<?php
session_start();

$articles = [                                                                                       
    ['nom' => 'Lunettes FPV', 'prix' => '89.99€', 'image' => 'photocasque/lunette.jpg'],
    ['nom' => 'Iphone', 'prix' => '599.00€', 'image' => 'photocasque/iphone.jpg'],
    ['nom' => 'Televiseur 4k', 'prix' => '670.00€', 'image' => 'photocasque/tv.jpg'],
    ['nom' => 'Claquette Puma', 'prix' => '35.99€', 'image' => 'photocasque/claquette.jpg'],
    ['nom' => 'Playstation 5', 'prix' => '690.00€', 'image' => 'photocasque/ps5.jpg'],
];

if (isset($_GET['article'])) {
    $article_name = $_GET['article'];
    foreach ($articles as $article) {
        if ($article['nom'] == $article_name) {
            $_SESSION['cart'][] = $article;
            break;
        }
    }
}

if (isset($_GET['clear_cart'])) {
    $_SESSION['cart'] = [];
}

if (!empty($_SESSION['cart'])) {
    echo '<h3>Articles dans votre panier :</h3>';
    echo '<ul>';
    foreach ($_SESSION['cart'] as $item) {
        echo '<li>' . $item['nom'] . ' - ' . $item['prix'] . '</li>';
    }
    echo '</ul>';
    echo '<form method="get"><button type="submit" name="clear_cart">Vider le panier</button></form>';
} else {
    echo '<p>Votre panier est vide.</p>';
}
?>

<form action="panier.php" method="get">
        <input type="hidden" name="article" value="Lunettes FPV">
        <img src="<?php echo $articles[0]['image']?>" alt="" class="produit-image">
        <p class="produit-description">Des lunettes FPV de haute qualité pour une expérience immersive.</p>
        <button type="submit">Lunettes FPV</button>
    </form>
    <form action="panier.php" method="get">
        <input type="hidden" name="article" value="Iphone">
        <img src="<?php echo $articles[1]['image']?>" alt="" class="produit-image">
        <p class="produit-description">Le dernier modèle d'Apple iPhone avec des fonctionnalités avancées.</p>
        <button type="submit">Apple Iphone</button>
    </form>
    <form action="panier.php" method="get">
        <input type="hidden" name="article" value="Televiseur 4k">
        <img src="<?php echo $articles[2]['image']?>" alt="" class="produit-image">
        <p class="produit-description">La dernière console de jeu PlayStation 5 pour des heures de divertissement.</p>
        <button type="submit">Televiseur 4K</button>
    </form>
    <form action="panier.php" method="get">
        <input type="hidden" name="article" value="Claquette Puma">
        <img src="<?php echo $articles[3]['image']?>" alt="" class="produit-image">
        <p class="produit-description">Claquettes Puma confortables et stylées pour toutes les occasions.</p>
        <button type="submit">Puma mixte</button>
    </form>
    <form action="panier.php" method="get">
        <input type="hidden" name="article" value="Playstation 5">
        <img src="<?php echo $articles[4]['image']?>" alt="" class="produit-image">
        <p class="produit-description">La dernière console de jeu PlayStation 5 pour des heures de divertissement.</p>
        <button type="submit">Playstation 5</button>
    </form>
</div>
    <button class="checkout-btn">Passer la commande</button>
</body>
</html>