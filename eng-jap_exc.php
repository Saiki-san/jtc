<?php
  session_start()
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php
      include($_SERVER['DOCUMENT_ROOT']."/jtc/db/db.inc.php");
      $sql = "SELECT * FROM verbs;";
      $result = mysqli_query($link, $sql);
      $resultcheck = mysqli_num_rows($result);
    ?>
  </head>
  <body>
    <?php
    if($resultcheck > 0){
      while($row = mysqli_fetch_assoc($result)){
      echo "<table><tr><td>".$row['np_neg_for_form']."</td></tr></table>";


      }
    }
    ?>
  </body>
</html>
