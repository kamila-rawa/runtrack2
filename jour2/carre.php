<?php

$largeur = 20;
$hauteur = 10;
$ligne = 0;
$colonne = 0;

while ($ligne <= $largeur){
    echo "_";
    $ligne++;
}
echo "<br/>";
$ligne = 0;

while ($colonne < 9 && $ligne < 20) {
   if ($ligne = 0 || $ligne = 19) 
  { echo "|";
$ligne++;}
else
{echo "*";
$ligne++;
}}
echo "<br/>";

?>