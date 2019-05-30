<?php
session_start();
include($_SERVER['DOCUMENT_ROOT']."/jtc/db/db.inc.php");

// Informal Japanese
$dictionary_form = $_POST['dictionary_form'];
$np_neg_inf_form = $_POST['np_neg_inf_form'];
$p_inf_form = $_POST['p_inf_form'];
$p_neg_inf_form = $_POST['p_neg_inf_form'];
// Formal Japanese
$np_for_form = $_POST['np_for_form'];
$np_neg_for_form = $_POST['np_neg_for_form'];
$p_for_form = $_POST['p_for_form'];
$p_neg_for_form = $_POST['p_neg_for_form'];
// English
$eng_form = $_POST['eng_form'];
$eng_neg_form = $_POST['eng_neg_form'];

if(
!empty($_POST['dictionary_form']) && !empty($_POST['np_neg_inf_form']) &&
!empty($_POST['p_inf_form']) && !empty($_POST['p_neg_inf_form']) &&
!empty($_POST['np_for_form']) && !empty($_POST['np_neg_for_form']) &&
!empty($_POST['p_for_form']) && !empty($_POST['p_neg_for_form']) &&
!empty($_POST['eng_form']) && !empty($_POST['eng_neg_form'])
){
$sql = "SELECT * FROM english_verbs WHERE eng_form='$eng_form'";
$query = mysqli_query($link, $sql);

if(mysqli_num_rows($query) > 0){
  echo "The verb \"".$eng_form."\" already exists.";
}else{
$sql = "INSERT INTO `english_verbs`

    SET
      `eng_form` = '". $eng_form ."',
      `eng_neg_form` = '". $eng_neg_form ."'";

    echo $sql . '<br>';
    mysqli_query($link, $sql);
    echo mysqli_error($link) . '<br>';

  $sql = "INSERT INTO `formal_verbs`

    SET
      `eng_form` = '".$eng_form."',
      `np_for_form` = '".$np_for_form."',
      `np_neg_for_form` = '".$np_neg_for_form."',
      `p_for_form` = '".$p_for_form."',
      `p_neg_for_form` = '".$p_neg_for_form."'";

    echo $sql . '<br>';
    mysqli_query($link, $sql);
    echo mysqli_error($link) . '<br>';

  $sql = "INSERT INTO `informal_verbs`

    SET
      `eng_form` = '". $eng_form ."',
      `dictionary_form` = '". $dictionary_form ."',
      `np_neg_inf_form` = '". $np_neg_inf_form ."',
      `p_inf_form` = '". $p_inf_form ."',
      `p_neg_inf_form` = '". $p_neg_inf_form ."'";

  mysqli_query($link, $sql);
  header("Location: ../add_verbs.php?insert=succes");
}
}else{
  header("Location: ../add_verbs.php?insert=error");
}
