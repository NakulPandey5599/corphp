<?php   


$arr = array(1,1,2,3,3);

for($i = 0; $i < count($arr); $i++) {}

$arr = [1, 2, 2, 3, 4, 4, 5];
$result = [];

foreach ($arr as $value) {
    if (!isset($result[$value])) {
        $result[$value] = $value;
    }
}

print_r($result);
