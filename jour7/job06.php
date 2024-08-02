<?php
function leetSpeak($str) {
    $str = str_replace(array('A', 'a'), '4', $str);
    $str = str_replace(array('B', 'b'), '8', $str);
    $str = str_replace(array('E', 'e'), '3', $str);
    $str = str_replace(array('G', 'g'), '6', $str);
    $str = str_replace(array('L', 'l'), '1', $str);
    $str = str_replace(array('S', 's'), '5', $str);
    $str = str_replace(array('T', 't'), '7', $str);

    return $str;
}

echo leetSpeak("Hello LaPlateforme!") . "<br>"; 
echo leetSpeak("This is a test string.") . "<br>"; 
?>
