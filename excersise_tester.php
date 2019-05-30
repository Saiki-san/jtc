<?php

$spit = 0;
$num = 1;

while($spit<$_SESSION['exc_amt']){
  echo  $num.". </br>";
  $num++;
  $spit++;
}
?>
