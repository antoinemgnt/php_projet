<?php
$fizz = "Fizz";
$buzz = "Buzz";
for ($i = 1; $i <= 30; $i++){
    if ($i % 15 == 0){
        echo "$fizz$buzz\n";
    } elseif ($i % 5 == 0) {
        echo "$buzz\n";
    } elseif ($i % 3 == 0){
        echo "$fizz\n";
    } else {
        echo "$i\n";
    }
}
