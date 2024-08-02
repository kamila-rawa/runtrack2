<?php
function occurrences($str, $char) {
    $count = 0; 
    $length = strlen($str);
    $i = 0;
    while (isset($str[$i])) {
        if ($str[$i] == $char) {
            $count++;
        }
        $i++;
    }

    return $count; 
}

echo occurrences("Bonjour", "o") . "<br>";  
echo occurrences("Hello LaPlateforme!", "e") . "<br>";  
echo occurrences("This is a test string.", "i") . "<br>";  
?>
