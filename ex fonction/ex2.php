<?php

function alcool ($q_total, $q_alcool) {
    $resultat = $q_total / $q_alcool;
    echo $resultat;
}

alcool (700, 200);
echo "<br>";
alcool (1000, 300);
echo "<br>";
alcool (1500, 500);

?>