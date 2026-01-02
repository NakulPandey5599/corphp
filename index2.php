<!-- Prime Number Check -->


<?php

$num = 7;
$flag = true;

for ($i = 2; $i <= sqrt($num); $i++) {
    if ($num % $i == 0) {
        $flag = false;
        break;
    }
}
echo $flag ? "Prime" : "Not Prime";
