<html>
<head>
</head>
<body>
<?php
$arr1=array(87,56,78,90,45,62,89);
$count=0;
$sum=0;
foreach($arr1 as $i){
$sum=$sum+$i;
if($i>=50){
$count=$count+1;
}
}
echo "No.of students passed:$count";
$avg=$sum/count($arr1);
echo "<br>the average mark is $avg";

?>
</body>
</html>

