<php?

$arr = [10, 45, 2, 99, 34];
$max = $arr[0];

foreach ($arr as $value) {
    if ($value > $max) {
        $max = $value;
    }
}

echo $max;


<?php
$str = "interview";
$rev = "";

for ($i = strlen($str) - 1; $i >= 0; $i--) {
    $rev .= $str[$i];
}

echo $rev; // weivretni
?>

$arr = [10, 45, 2, 99, 34];

$largest = $arr[0];
$secondLargest = -INF;

foreach ($arr as $value) {
    if ($value > $largest) {
        $secondLargest = $largest;
        $largest = $value;
    } elseif ($value > $secondLargest && $value != $largest) {
        $secondLargest = $value;
    }
}

echo $secondLargest;
