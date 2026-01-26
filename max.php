<?php
$arr = [10, 45, 2, 99, 34];

$max = $arr[0];

foreach ($arr as $value) {
    if ($value > $max) {
        $max = $value;
    }
}

echo $max; // 99
?>

<?php
$str = "interview";
$rev = "";

for ($i = strlen($str) - 1; $i >= 0; $i--) {
    $rev .= $str[$i];
}

echo $rev; // weivretni
?>
