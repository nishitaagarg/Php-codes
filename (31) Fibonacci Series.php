<?php

$terms = 10;
$num1 = 0;
$num2 = 1;

echo "Fibonacci Series: $num1, $num2";

for ($i = 3; $i <= $terms; $i++) {
    $next = $num1 + $num2;
    echo ", $next";
    $num1 = $num2;
    $num2 = $next;
}

echo "executed by Meghna";

?> 
