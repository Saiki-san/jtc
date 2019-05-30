<?php
if(!empty($_GET['dictionary_form']) && !empty($_GET['eng_form'])){
  $dictionary_form = $_GET['dictionary_form'];
  $eng_form = $_GET['eng_form'];
  $eng_neg_form = "not ".$eng_form;
  $countchars = mb_strlen($dictionary_form);
  $result2 = mb_substr($dictionary_form, -1);
  $result = mb_substr($dictionary_form, 0, $countchars - 1);
  $p_for_formount = mb_strlen($dictionary_form);

   // formal verbs
   $reg_np_for = "ます";
   $reg_np_neg_for = "ません";
   $reg_p_for = "ました";
   $reg_p_neg_for = "ませんでした";

   // informal verbs
   $reg_np_neg_inf = "ない";
   $reg_p_neg_inf = "なかった";

  if(isset($_GET['iru_eru_exc'])){
    if($_GET['iru_eru_exc'] == 'on'){
      $np_for_form = $result.$reg_np_for;
      $np_neg_for_form = $result.$reg_np_neg_for;
      $p_for_form = $result.$reg_p_for;
      $p_neg_for_form = $result.$reg_p_neg_for;
      $np_neg_inf_form = $result.$reg_np_neg_inf;
      $p_inf_form = $result."た";
      $p_neg_inf_form = $result.$reg_p_neg_inf;
    }
   }
  else if(isset($_GET['ku_exc'])){
    if($_GET['ku_exc'] == 'on'){
      $np_for_form = $result."き".$reg_np_for;
      $np_neg_for_form = $result."き".$reg_np_neg_for;
      $p_for_form = $result."き".$reg_p_for;
      $p_neg_for_form = $result."き".$reg_p_neg_for;
      $np_neg_inf_form = $result."か".$reg_np_neg_inf;
      $p_inf_form = $result."った";
      $p_neg_inf_form = $result."か".$reg_p_neg_inf;
    }
  }else if(!isset($_GET['ku_exc']) && !isset($_GET['iru_eru_exc'])){

  switch ($result2) {

    case "う":
      $np_for_form = $result."い".$reg_np_for;
      $np_neg_for_form = $result."い".$reg_np_neg_for;
      $p_for_form = $result."い".$reg_p_for;
      $p_neg_for_form = $result."い".$reg_p_neg_for;
      $np_neg_inf_form = $result."わ".$reg_np_neg_inf;
      $p_inf_form = $result."った";
      $p_neg_inf_form = $result."わ".$reg_p_neg_inf;
    break;

    case "く":
      $np_for_form = $result."き".$reg_np_for;
      $np_neg_for_form = $result."き".$reg_np_neg_for;
      $p_for_form = $result."き".$reg_p_for;
      $p_neg_for_form = $result."き".$reg_p_neg_for;
      $np_neg_inf_form = $result."か".$reg_np_neg_inf;
      $p_inf_form = $result."いた";
      $p_neg_inf_form = $result."か".$reg_p_neg_inf;
    break;

    case "ぐ":
      $np_for_form = $result."ぎ".$reg_np_for;
      $np_neg_for_form = $result."ぎ".$reg_np_neg_for;
      $p_for_form = $result."ぎ".$reg_p_for;
      $p_neg_for_form = $result."ぎ".$reg_p_neg_for;
      $np_neg_inf_form = $result."が".$reg_np_neg_inf;
      $p_inf_form = $result."いだ";
      $p_neg_inf_form = $result."が".$reg_p_neg_inf;
    break;

    case "す":
      $np_for_form = $result."し".$reg_np_for;
      $np_neg_for_form = $result."し".$reg_np_neg_for;
      $p_for_form = $result."し".$reg_p_for;
      $p_neg_for_form = $result."し".$reg_p_neg_for;
      $np_neg_inf_form = $result."さ".$reg_np_neg_inf;
      $p_inf_form = $result."した";
      $p_neg_inf_form = $result."さ".$reg_p_neg_inf;
    break;

    case "つ":
      $np_for_form = $result."ち".$reg_np_for;
      $np_neg_for_form = $result."ち".$reg_np_neg_for;
      $p_for_form = $result."ち".$reg_p_for;
      $p_neg_for_form = $result."ち".$reg_p_neg_for;
      $np_neg_inf_form = $result."た".$reg_np_neg_inf;
      $p_inf_form = $result."った";
      $p_neg_inf_form = $result."た".$reg_p_neg_inf;
    break;

    case "ぬ":
      $np_for_form = $result."に".$reg_np_for;
      $np_neg_for_form = $result."に".$reg_np_neg_for;
      $p_for_form = $result."に".$reg_p_for;
      $p_neg_for_form = $result."に".$reg_p_neg_for;
      $np_neg_inf_form = $result."な".$reg_np_neg_inf;
      $p_inf_form = $result."んだ";
      $p_neg_inf_form = $result."な".$reg_p_neg_inf;
    break;

    case "ぶ":
      $np_for_form = $result."び".$reg_np_for;
      $np_neg_for_form = $result."び".$reg_np_neg_for;
      $p_for_form = $result."び".$reg_p_for;
      $p_neg_for_form = $result."び".$reg_p_neg_for;
      $np_neg_inf_form = $result."ば".$reg_np_neg_inf;
      $p_inf_form = $result."んだ";
      $p_neg_inf_form = $result."ば".$reg_p_neg_inf;
    break;

    case "む":
      $np_for_form = $result."み".$reg_np_for;
      $np_neg_for_form = $result."み".$reg_np_neg_for;
      $p_for_form = $result."み".$reg_p_for;
      $p_neg_for_form = $result."み".$reg_p_neg_for;
      $np_neg_inf_form = $result."ま".$reg_np_neg_inf;
      $p_inf_form = $result."んだ";
      $p_neg_inf_form = $result."ま".$reg_p_neg_inf;
    break;

    case "る":
      $np_for_form = $result."り".$reg_np_for;
      $np_neg_for_form = $result."り".$reg_np_neg_for;
      $p_for_form = $result."り".$reg_p_for;
      $p_neg_for_form = $result."り".$reg_p_neg_for;
      $np_neg_inf_form = $result."ら".$reg_np_neg_inf;
      $p_inf_form= $result."った";
      $p_neg_inf_form = $result."ら".$reg_p_neg_inf;
    break;
    }
    }

    include($_SERVER['DOCUMENT_ROOT']."/jtc/db/db.inc.php");

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
      header("Location: add_regular_verbs.php?insert=succes");
    }
    }else{
    header("Location: add_regular_verbs.php?insert=error");
    }
