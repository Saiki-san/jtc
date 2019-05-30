<?php
if(isset($_GET['btn'])){
  $ja = $_GET['select'];
    switch ($ja) {
      case "Words: Japanese -> English.":
        echo "nee";
        break;

      default:
        echo "ja";
        break;
    }
}
?>
