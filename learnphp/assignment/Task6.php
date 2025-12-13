<?php
$a = 5;
$b = 10;

echo "Before swapping:<br>";
echo "a = $a, b = $b<br><br>";

// Swap without third variable
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo "After swapping:<br>";
echo "a = $a, b = $b";
?>
