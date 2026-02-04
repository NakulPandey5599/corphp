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

$arr = [1, 2, 3, 5];
$n = 5;

$expectedSum = ($n * ($n + 1)) / 2;
$actualSum = array_sum($arr);

$missingNumber = $expectedSum - $actualSum;

echo $missingNumber;


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

$arr = [1, 2, 3, 5];
$n = 5;

$expectedSum = ($n * ($n + 1)) / 2;
$actualSum = array_sum($arr);

$missingNumber = $expectedSum - $actualSum;

echo $missingNumber;
