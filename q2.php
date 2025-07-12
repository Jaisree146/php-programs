<html>
 <head></head>
 <body> 
  <h2>bill amount calculation</h2>
  <?php 
  $a=readline("enter no.of units:");
  $ans=0;
  if($a>0){
   if($a<100){
    $ans=$a*3;
   }
   else if($a>100 && $a<200){
    $ans=(100*3)+(($a-100)*5);
   }
   else{
   $ans=(100*3)+(100*5)+(($a-200)*7);
   }
}
echo "$ans";



  
  
  
  ?>
 </body>
</html>