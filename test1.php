<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php
      $dictionary_form = "される";
      $countchars = mb_strlen($dictionary_form);
      $result2 = mb_substr($dictionary_form, -1);
      $result = mb_substr($dictionary_form, 0, $countchars - 1);
      echo $result;
      ?>
  </body>
</html>
