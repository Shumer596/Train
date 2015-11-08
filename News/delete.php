<?php
include_once "db.php";
/** @var mysqli $connect */

$id = $_GET['id'];

mysqli_query($connect,"DELETE FROM news WHERE id = '$id'");

mysqli_close($connect);

echo "Новость успешно удалена!";

?>