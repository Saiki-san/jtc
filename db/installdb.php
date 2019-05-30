//db maken
<?php
include('config.inc.php');
$link = mysqli_connect($db['server'], $db['user'], $db['password']);
$sql = "CREATE DATABASE `" . $db['database'] . "` COLLATE 'utf8mb4_unicode_ci'";
echo $sql . '<br>';
mysqli_query($link, $sql);
echo mysqli_error($link) . '<br>';
?>
//tabel maken
<?php
mysqli_select_db($link, $db['database']);
$sql = "CREATE TABLE `gebruikers`
    (
    `id` MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `gebruikersnaam` VARCHAR(50) NOT NULL UNIQUE KEY,
    `wachtwoord` VARCHAR(64) NOT NULL,
    `email` VARCHAR(254),
    `laatst_ingelogd` TIMESTAMP
    ) ";
  echo $sql . '<br>';
  mysqli_query($link, $sql);
  echo mysqli_error($link) . '<br>';
?>
//admin account toevoegen
<?php
$gebruikersnaam = 'admin';
$wachtwoord = 'test';
$email = 'admin@example.com';
$wachtwoord = hash('sha256', $wachtwoord);
$sql = "INSERT INTO `gebruikers`
SET
    `gebruikersnaam` = '".$gebruikersnaam."',
    `wachtwoord` = '".$wachtwoord."',
    `email` = '".$email."' ";
    echo $sql . '<br>';
    mysqli_query($link, $sql);
    echo mysqli_error($link) . '<br>';
?>

// Creating tables for verbs.

// English table
<?php
mysqli_select_db($link, $db['database']);
$sql = "CREATE TABLE `english_verbs`
    (
    `id` MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `eng_form` VARCHAR(64) NOT NULL,
    `eng_neg_form` VARCHAR(64) NOT NULL
    ) ";
  echo $sql . '<br>';
  mysqli_query($link, $sql);
  echo mysqli_error($link) . '<br>';
?>
// Japanese formal table
<?php
mysqli_select_db($link, $db['database']);
$sql = "CREATE TABLE `formal_verbs`
    (
    `id` MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,

    `eng_form` VARCHAR(64) NOT NULL UNIQUE KEY,
    `np_for_form` VARCHAR(64) NOT NULL,
    `np_neg_for_form` VARCHAR(64) NOT NULL,
    `p_for_form` VARCHAR(64) NOT NULL,
    `p_neg_for_form` VARCHAR(64) NOT NULL

    ) ";
  echo $sql . '<br>';
  mysqli_query($link, $sql);
  echo mysqli_error($link) . '<br>';
?>
// Japanese informal table
<?php
mysqli_select_db($link, $db['database']);
$sql = "CREATE TABLE `informal_verbs`
    (
    `id` MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `eng_form` VARCHAR(64) NOT NULL UNIQUE KEY,
    `dictionary_form` VARCHAR(64) NOT NULL ,
    `np_neg_inf_form` VARCHAR(64) NOT NULL,
    `p_inf_form` VARCHAR(64) NOT NULL,
    `p_neg_inf_form` VARCHAR(64) NOT NULL

    ) ";
  echo $sql . '<br>';
  mysqli_query($link, $sql);
  echo mysqli_error($link) . '<br>';
?>
//adding "to go" as standard verb
<?php
$dictionary_form = '行く';
$np_neg_inf_form = '行かない';
$p_inf_form = '行った';
$p_neg_inf_form = '行かなかった';

$np_for_form = '行きます';
$np_neg_for_form = '行きません';
$p_for_form = '行きました';
$p_neg_for_form = '行きませんでした';

$eng_form = 'go';
$eng_neg_form = 'not go';

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

  echo $sql . '<br>';
  mysqli_query($link, $sql);
  echo mysqli_error($link) . '<br>';
}
