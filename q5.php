<?php
$registrants = [
    ["name" => "Ravi", "paid" => true],
    ["name" => "Meena", "paid" => false],
    ["name" => "Amit", "paid" => true]
];

$paid = 0;
$unpaid = 0;

foreach($registrants as $person){
    if ($person['paid']) {
        $paid++;
    } else {
        $unpaid++;
        
    }
}

echo "<br>Total Paid: $paid<br>";
echo "Total Unpaid: $unpaid<br>";
?>
