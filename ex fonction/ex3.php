<?php

function couperGateau($nombre_coupe) {
    if ($nombre_coupe >= 0) {
        $nombre_parts = $nombre_coupe + 1;
        return $nombre_parts;
    } else {
        return "Le nombre de coupes doit être supérieur ou égal à 0.";
    }
}

echo couperGateau(4) . "<br>"; 
echo couperGateau(-1);  

?>
