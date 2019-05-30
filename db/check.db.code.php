<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
    <?php
      include 'test3.php'
    ?>
  <body>
    <form method="post">
      <input type="hidden" name="storeRandVal" value="<?php echo $randomValue; ?>">
      <?php
      echo "<p>What is ".$qpn." in ".$qtype."? (".$qtime.")</p>";
      ?>
      <input type="text" name="answer"></input>
      <input type="submit" value="check" name="btn">
    </form>
  </body>
</html>
