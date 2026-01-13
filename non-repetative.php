<?php



$str = "swiss";
for ($i = 0; $i < strlen($str); $i++) {
    if (substr_count($str, $str[$i]) == 1) {
        echo $str[$i];
        break;
    }
}


