<?php
  include 'db.inc.php';

      // selects a random english verb from the database
      $sql = "SELECT * FROM english_verbs ORDER BY RAND();";
      $result = mysqli_query($link, $sql);
      $resultCheck = mysqli_num_rows($result);

      if($resultCheck > 0){
      $row = mysqli_fetch_assoc($result);
      $neg = $row['eng_neg_form'];
      $pos = $row['eng_form'];
      }

      // Randomizer
      $number_1 = rand(1,2);
      $number_2 = rand(1,2);
      $number_3 = rand(1,2);

      // past or non-past
      if($number_1 == 1){
        $vtime = 'np';
        $qtime = 'non-past';
      }elseif($number_1 == 2){
        $qtime = 'past';
        $vtime = 'p';
      }

      // positive or negative
      if($number_2 == 1){
        $vpn = '';
        $qpn = $pos;
      }elseif($number_2 == 2){
        $vpn = 'neg';
        $qpn = $neg;
      }

      // formal or informal
      if($number_3 == 1){
        $type = 'formal_verbs';
        $vtype = 'for';
        $qtype = 'formal';
      }elseif($number_3 == 2){
        $type = 'informal_verbs';
        $vtype = 'inf';
        $qtype = 'informal';
      }

      // to prevend a double _ when it's positive
      if($vpn == 'neg'){
      $srch = $vtime."_".$vpn."_".$vtype."_form";
      }else{
      $srch = $vtime."_".$vtype."_form";
      }

      // np_inf_form is saved as dictionary_form in the database
      if($srch == 'np_inf_form'){
        $srch = 'dictionary_form';
      }

      // select the japanese version form the english verb in the database
      $sql = "SELECT * FROM $type WHERE eng_form='$pos';";
      $result = mysqli_query($link, $sql);
      $resultCheck = mysqli_num_rows($result);

      if($resultCheck > 0){
        $row = mysqli_fetch_assoc($result);
        $cansw = $row[$srch];
      }

      // checks the answer form check.dp.code.php
      if(isset($_POST['btn']) && isset($_POST['storeRandVal'])){
      $buttonPost = $_POST['btn'];
      $enteredValue = htmlspecialchars(trim($_POST['answer']));
      $hidden = $_POST['storeRandVal'];
      $randomValue = $cansw;
      if(isset($buttonPost)){
        if($enteredValue == $hidden){
          echo "TRUE";
        }elseif($randomValue != $hidden){
          echo "FALSE";
        }else{
          echo "FALSE";
        }
      }
      }
