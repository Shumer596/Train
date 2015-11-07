<?php
/** mysqli $connect */
$connect = mysqli_connect('127.0.0.1','root','');
/** @var string $db */
$db = mysqli_select_db($connect,'bd_news');
mysqli_query($connect,"SET NAMES 'utf8' ");
if (!$connect||!$db)
{
  mysqli_error();
}

?>

