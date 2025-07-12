<?php
$users=[
["name"=>"Alice","days_late"=>3],
["name"=>"Bob","days_late"=>4],
["name"=>"Cara","days_late"=>5]];
$n=count($users);

for($i=0;$i<$n;$i++){
 echo $users[$i]['name']." fine :". ($users[$i]['days_late']*2)."<br>";

}

?>