//Sorting in Ascending Order
<?php
$numbers = array(5, 2, 8, 1, 9);

sort($numbers);

echo "Ascending Order:<br>";
foreach ($numbers as $value) {
    echo $value . " ";
}
?>
