<html>
<head><\head>
<body>
<?php 
$age=readline("enter the age:");
if($age>0 && $age<=12){
echo "person is child";
}
else if($age>=13 and $age<=19){
echo "person is teenager";
}
else if($age>=20 and $age<=59){
echo "person is adult";
}
else{
echo "person is senior citizen ship";
}
?>
</body>
</html>