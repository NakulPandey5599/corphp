<?php

$arr = [10, 45, 2, 99, 34];
$max = $arr[0];

foreach ($arr as $value) {
    if ($value > $max) {
        $max = $value;
    }
}
echo $max;






/////


$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];

$result = $arr1;

foreach ($arr2 as $value) {
    $result[] = $value;
}

print_r($result);
