<?php
  session_start()
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Excersise 1: </h1><h3><?php echo $_SESSION['exc_type']; ?></h3>
    <?php
      include 'excersise_tester.php';
    ?>
  </body>
</html>
