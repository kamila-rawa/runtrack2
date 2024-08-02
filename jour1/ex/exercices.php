<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>Titre principal</h1>
        <?php
            for($x = 0; $x <= 5; $x++){    
                echo '$x contient la valeur ' .$x. '<br>';
            }
        ?>
        <p>Un paragraphe</p>
    </body>
</html>