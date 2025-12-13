//Sorting in Descending Order
<?php
$numbers = array(5, 2, 8, 1, 9);

rsort($numbers);

echo "Descending Order:<br>";
foreach ($numbers as $value) {
    echo $value . " ";
}
?>
