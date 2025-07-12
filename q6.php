<?php
$numbers = [10, 20, 30, 40];

$sum = array_sum($numbers);
$product = array_product($numbers);
$average = $sum / count($numbers);
$increased = array_map(fn($n) => $n + 10, $numbers);
echo "Sum: $sum<br>";
echo "Product: $product<br>";
echo "Average: $average<br>";
echo "Increased by 10: " . implode(", ", $increased);
?>
