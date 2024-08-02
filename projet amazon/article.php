<?php

    session_start();

    include("produits.php");

    $choix = $_GET ["choix"] ?? 0 ;
    $produit = array();

    for ($i = 0; $i < count($produits); $i = $i + 1)  {
        echo $produits[$i]["id"];
        if ($produits[$i]["id"] == $choix) {
            $produit = $produits[$i];
        }
    }

    /*print_r($produit);*/

?>
            

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $produit['name']; ?></title>
    <link rel="stylesheet" href="article.css">
</head>
<body>

<header>

    <img src="logo-Amazon.png" width="150px">

    <div class="header1">
        <b><a class="linkwhite" href="#">Toutes</a></b>
        <b><a class="linkwhite" href="#">Meilleures ventes</a></b>
        <b><a class="linkwhite" href="#">Amazon Basics</a></b>
        <b><a class="linkwhite" href="#">Ventes Flash</a></b>
        <b><a class="linkwhite" href="#">Dernières Nouveautés</a></b>
    </div>

    <div class="header2">  
                <b><a class="linkwhite" href="#">Ventes Flash</a></b>
                </br><b><a class="linkwhite" href="#">Mobilier de jardin</a></b>
                </br><b><a class="linkwhite" href="#">Décoration extérieure</a></b>
                </br><b><a class="linkwhite" href="#">Jardinage</a></b>
                </br><b><a class="linkwhite" href="#">Barbecues</a></b>
                <b><a class="linkwhite" href="#">Piscines et Spa</a></b>
    </div>

    <div class="produit">
                <img src="Petit_Parasol.jpg" width="100px" height="100px">
                <b><p><a class="linkblack" href="#"><h3>Produit du mois !!!</h3>GOPLUS Parasol de Jardin Extérieur 4,7M, Grand Parasol Etanche en Métal avec Manivelle, 12 Baleines, Poteau 48MM, Résistant aux UV, Parasol Double Face pour Balcon, Plage, Jardin (Café)</a></p></b>
    </div>
           
</header>

<main>
    <div class="main">
        <div class="block1">
            <h1><?php echo $produit['name']; ?></h1>
            <img src="<?php echo $produit['image']; ?>" alt="<?php echo $produit['name']; ?>" style="width: 200px;" />
            <p><?php echo $produit['overview']; ?></p>
            <img src="<?php echo $produit['image']; ?> "width="450px" height="450px">
                <b><p><FONT size=10pt>Prix : <?php echo $produit['price']; ?> €</FONT></p></b>
                <b><p><a class="linkblue" href="#">Retours GRATUITS</a></p></b>
                <p>Livraison GRATUITE demain<b>30 juillet. Commandez dans les 1 h 20 min.<a class="linkblue" href="#">Détails</a></p></b>
                <p><a class="linkblue" href="#">Livraison à CANNES 06400_____</br>Mettre à jour l'emplacement</a></p>
                <b><p><a class="linkgreen" href="#"><FONT size=6pt>En stock</FONT></a></p></b>
        </div>

        <div class="block2">
                <h2><b><p><?php echo $produit['overview']; ?></p></b></h2>
                <b><p><FONT size=10pt>Prix : <?php echo $produit['price']; ?> €</FONT></p></b>
                <b><p><a class="linkblue" href="#">Retours GRATUITS</a></p></b>
                </br><p>Les prix des articles vendus sur Amazon incluent la TVA. En fonction de votre adresse de livraison, la TVA peut varier au moment du paiement. Pour plus d’informations, Veuillez voir les détails.</p>
                </br><b><p><a class="linkred" href="#">Payez cet article en 4 fois</a><a class="linkblue" href="#">Voir détails et conditions</a></p></b>
                <p>Couleur: <b>Rouge</b></p>
            <div class="button">
                <button><img src ="PPbeige.jpg"><p>194,99</p></button><button><img src ="PPcafe.jpg"><p>199,99</p></button><button><img src ="PPnoir.jpg"><p>179,99</p></button><button><img src ="PProuge.jpg"><b><p><FONT color=red>179,99</FONT></p></b></button>
            </div>
                <h3><b><p>À propos de cet article</p></b></h3><br/>

                <ul><li><p>☀︎Capacité d'Ombrage Supérieure : Ce parasol de jardin est fabriqué à partir de tissu en polyester de haute qualité, offrant une résistance à l'eau, aux UV et à la décoloration. Elle est également bien isolée pour offrir une expérience fraîche et confortable. Ce grand parasol de 3*3M vous apporte de l'ombre cet été.</p></li></ul>
                <ul><li><p>🌧️Squelette Robuste & Construction Stable : Ce parasol d'extérieur est doté de baleines de barres en fer et à double couche pour assurer sa solidité et longue durée de vie. La base croisée maintient le parasol stable. En outre, vous pouvez utiliser une base lestée supplémentaire (non incluse) pour assurer une meilleure stabilité au parasol.</p></li></ul>
                <ul><li><p>☀︎Pivotement & Inclinaison Flexibles : Afin de répondre à vos besoins d'ombre à différents angles et positions, notre parasol inclinable est conçu pour pivoter à 360°, vous pouvez le tourner vers 8 directions différentes à l'aide de la pédale. Il dispose également de 3 angles d'inclinaison pour besoins divers.</p></li></ul>
                <ul><li><p>🌧️Conceptions Intimes : Le dessus du parasol déporté est doté d'un trou de ventilation pour assurer la circulation de l'air pendant l'utilisation. La poignée sur le poteau vous permet d'ouvrir ou de fermer le parasol carré avec facilité et la sangle vous aide aussi à le ranger facilement.</p></li></ul>
                <ul><li><p>☀︎Aspect Moderne & Utilisations Larges : Ce parasol de patio a une apparence simple et moderne qui conviendra à différents styles de décoration. Vous pouvez l'utiliser dans plusieurs endroits, comme les terrasses, les jardins, les bords de piscine, les cafés pour un usage domestique ou commercial.</p></li></ul>
                <h3><b><p>Évaluations clients par caractéristique</p></b></h3><br/>
            <div class="evaluation">
                <p>Facile à monter</p><img src="5stars.jpg" width="150px">
                <p>Solidité</p><img src="5stars.jpg" width="150px">
                <p>Stabilité</p><img src="5stars.jpg" width="150px">
            </div>
                <b><p><a class="linkblue" href="#">Voir tous les commentaires</a></p></b>
            <div class="commentaire">   
                <b><p><a class="linkblue" href="#">Signaler un problème avec ce produit</a></p></b>
                <img src ="logo_commentaire.png" width="30px" height="30px">
            </div>
                <p>Nos prix incluent l'éco-participation sur tous les produits concernés. Voulez-vous recycler vos vieux meubles gratuitement?<b><a class="linkblue" href="#">En apprendre plus</a></b></p>

        </div>
    </div>            

</main>

<form method="get" action="panier.php">
    <input type="hidden" name="add_to_cart" value="1">
    <input type="hidden" name="choix" value="<?php echo $choix; ?>">
    <button class=bouton type="submit">Ajouter au panier</button>
</form>
        <!-- Formulaire pour ajouter le produit au panier 
    <form method="get">
        <button class=bouton type="submit" name="add_to_cart">Ajouter au panier</button>
    </form>
    -->

     <!-- Lien pour retourner à la page d'accueil -->
     <a class="retour" href="Page d'accueil.php">Retour à l'accueil</a>

</body>
</html>

