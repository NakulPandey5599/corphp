<?php
$str = "interview";
$rev = "";

for ($i = strlen($str) - 1; $i >= 0; $i--) {
    $rev .= $str[$i];
}

echo $rev; // weivretni
?>


<?php
$arr = [1, 2, 2, 3, 4, 4, 5];
$result = [];

foreach ($arr as $value) {
    if (!in_array($value, $result)) {
        $result[] = $value;
    }
}

print_r($result);
?>
