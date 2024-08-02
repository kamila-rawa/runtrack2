<?php

$painchoco = 0;
$croissant = 0;
$brioche = 0;
$étudiant =  $_GET["nom"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<?php

if ($étudiant == "theo"){ 
    echo "painchoco = " . $painchoco = 3 . "<br />"; 
    echo "brioche = " . $brioche = 2 . "<br />"; 
    echo "croissant = " . $croissant = 0 . "<br />";
}

elseif ($étudiant == "walid"){
    echo "painchoco = " . $painchoco = 7 . "<br />";
    echo "croissant = " . $croissant = 6 . "<br />";
    echo "brioche = " . $brioche = 0 . "<br />";}

else { 
    echo "nom manquant" ;
}

?>

</body>
</html>