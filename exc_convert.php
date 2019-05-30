<?php
  if(isset($_POST['btn'])){
    if(!empty($_POST['exc_amt'])){
      $_SESSION['exc_type'] = $_POST['exc_type'];
      $_SESSION['exc_amt'] = $_POST['exc_amt'];
      header('Location: test.php');
    }
    else if(empty($_POST['exc_amt'])){
      echo "fill in a number please";
    }
  }
?>
