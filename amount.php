<?php


if(isset($_GET['amount'])){
  $amount = $_GET['amount'];

  if($amount < 5){
    echo "5 is the min";
  }
  if($amount > 25){
    echo "25 is the max";
  }
}
