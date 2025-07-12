<?php
$n=(int)readline("enter no.of members:");
$users=[];
for($i=0;$i<$n;$i++){
$name=readline("enter name:");
$role=readline("enter role:");
$users[]=[
"name"=>$name,
"role"=>$role,
];
}
print_r($users);

$admin=0;
$editor=0;
$user=0;
for($i=0;$i<$n;$i++){
if($users[$i]['role']=="admin"){
$admin=$admin+1;
}
if($users[$i]['role']=="editor"){
$editor=$editor+1;
}
if($users[$i]['role']=="user"){
$user=$user+1;
}
}
echo "The no.of people who are admin:$admin<br>";
echo "The no.of people who are editor:$editor<br>";
echo "The no.of people who are user:$user<br>";
?>