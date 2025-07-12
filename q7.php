<?php
$ips = ["192.168.1.1", "192.168.1.2", "192.168.1.1", "192.168.1.3"];

echo "Unique Visitors: " . count(array_unique($ips)) . "<br>";

foreach (array_count_values($ips) as $ip => $c)
    if ($c > 1) echo "$ip visited $c times<br>";
?>
