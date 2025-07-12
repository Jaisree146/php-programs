<html>
 <head></head>
 <body> 
  <h2>prime numbers from 1 to 100</h2>
  <?php 
  for($i=1;$i<=100;$i++)
  {
  $flag=0;
  for($j=2;$j<$i;$j++){
  if($i%$j==0){
   $flag=1;
   break;
  }
  }
  if($flag==0){
   echo "<br>$i is prime";
  } 
 }

  ?>
 </body>
</html>