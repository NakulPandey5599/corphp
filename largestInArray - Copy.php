<?php
$arr = [10, 45, 2, 99, 34];
$max = $arr[0];

foreach ($arr as $value) {
    if ($value > $max) {
        $max = $value;
    }
}
echo $max;
