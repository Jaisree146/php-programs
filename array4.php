<?php
echo "event registration form";
$events=[
        ["event_name" => "paper","cost"=>100],
        ["event_name" => "project","cost"=>200],
        ["event_name" => "coding","cost"=>80]];

$n=(int)readline("enter no.of events you want to register:");
$total=0;
for($i=0;$i<$n;$i++){
$name=readline("enter the event name you want to register for:");
 foreach ($events as $e) {
 if ($e["event_name"] == $name) {
 $total = $total + $e["cost"];
 break; // exit loop after match
  }
 }}
echo "$total";

?>
