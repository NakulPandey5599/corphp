<?php

$sentence = "I am learning PHP programming";

$words = explode(" ", $sentence);
$longestWord = "";

foreach ($words as $word) {
    if (strlen($word) > strlen($longestWord)) {
        $longestWord = $word;
    }
}

echo $longestWord;
